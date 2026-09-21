<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\Trivia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    public function index(Request $request)
    {
        $query = Guide::with(['user', 'trivia.zone'])->where('is_approved', true);

        if ($request->filled('q')) {
            $search = $request->get('q');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $guides = $query->orderBy('created_at', 'desc')->paginate(12);

        return view('guides.index', compact('guides'));
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('info', 'Você precisa estar logado para publicar um novo guia da comunidade.');
        }

        $trivias = Trivia::with('zone')->orderBy('item_title')->get();
        return view('guides.create', compact('trivias'));
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Login necessário para publicar.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|min:20',
            'trivia_id' => 'nullable|exists:trivias,id',
        ]);

        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $count = 1;
        while (Guide::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $guide = Guide::create([
            'user_id' => Auth::id(),
            'trivia_id' => $request->trivia_id,
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'is_approved' => true,
        ]);

        return redirect()->route('guides.show', $guide->slug)->with('success', 'Seu guia foi publicado com sucesso!');
    }

    public function show($slug)
    {
        $guide = Guide::with(['user', 'trivia.zone', 'comments.user'])
            ->where('slug', $slug)
            ->orWhere('id', $slug)
            ->firstOrFail();

        $guide->increment('views_count');

        return view('guides.show', compact('guide'));
    }
}
