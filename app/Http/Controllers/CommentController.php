<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('info', 'Você precisa se conectar para enviar um comentário.');
        }

        $request->validate([
            'content' => 'required|string|min:3|max:1000',
            'trivia_id' => 'nullable|exists:trivias,id',
            'guide_id' => 'nullable|exists:guides,id',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'trivia_id' => $request->trivia_id,
            'guide_id' => $request->guide_id,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comentário publicado!');
    }
}
