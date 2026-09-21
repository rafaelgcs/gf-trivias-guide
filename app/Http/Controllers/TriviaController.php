<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Trivia;
use App\Models\TriviaStep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TriviaController extends Controller
{
    public function index(Request $request)
    {
        // Distinct list of cities / regions
        $cities = Zone::select('city')->distinct()->orderBy('city', 'asc')->pluck('city');

        $selectedCity = $request->get('city');

        // Zone list (filtered by selected city if any)
        $zonesQuery = Zone::orderBy('sort_order', 'asc');
        if ($selectedCity) {
            $zonesQuery->where('city', $selectedCity);
        }
        $zones = $zonesQuery->get();

        // Get unique NPC list for filter dropdown
        $npcs = TriviaStep::whereNotNull('npc_name')
            ->where('npc_name', '!=', '')
            ->distinct()
            ->orderBy('npc_name')
            ->pluck('npc_name');

        $query = Trivia::with(['zone', 'steps', 'comments', 'guides']);

        // Filter by City / Region
        if ($selectedCity) {
            $query->whereHas('zone', function ($q) use ($selectedCity) {
                $q->where('city', $selectedCity);
            });
        }

        // Filter by Zone / Map (ID or Slug)
        if ($request->filled('zone')) {
            $zoneSlug = $request->get('zone');
            $query->whereHas('zone', function ($q) use ($zoneSlug) {
                if (is_numeric($zoneSlug)) {
                    $q->where('id', $zoneSlug);
                } else {
                    $q->where('slug', $zoneSlug);
                }
            });
        }

        // Search Query (title, history name, notes, or step details)
        if ($request->filled('q')) {
            $search = $request->get('q');
            $query->where(function ($q) use ($search) {
                $q->where('item_title', 'like', "%{$search}%")
                  ->orWhere('history_title', 'like', "%{$search}%")
                  ->orWhere('notes', 'like', "%{$search}%")
                  ->orWhereHas('steps', function ($sq) use ($search) {
                      $sq->where('npc_name', 'like', "%{$search}%")
                        ->orWhere('coordinates', 'like', "%{$search}%")
                        ->orWhere('item_required', 'like', "%{$search}%")
                        ->orWhere('instruction', 'like', "%{$search}%");
                  });
            });
        }

        // Filter by NPC
        if ($request->filled('npc')) {
            $npcName = $request->get('npc');
            $query->whereHas('steps', function ($q) use ($npcName) {
                $q->where('npc_name', $npcName);
            });
        }

        $trivias = $query->orderBy('zone_id', 'asc')->orderBy('sort_order', 'asc')->get();

        // Stats calculation
        $totalTriviasCount = Trivia::count();
        $totalPoints = $totalTriviasCount * 2;
        $maxGfPoints = 1432;

        $completedIds = [];
        if (Auth::check()) {
            $completedIds = Auth::user()->completedTrivias()->pluck('trivias.id')->toArray();
        }

        return view('trivias.index', compact(
            'cities',
            'selectedCity',
            'zones',
            'npcs',
            'trivias',
            'totalTriviasCount',
            'totalPoints',
            'maxGfPoints',
            'completedIds'
        ));
    }

    public function show($id)
    {
        $trivia = Trivia::with(['zone', 'steps', 'comments.user', 'guides.user'])->findOrFail($id);
        
        $relatedTrivias = Trivia::where('zone_id', $trivia->zone_id)
            ->where('id', '!=', $trivia->id)
            ->take(5)
            ->get();

        $completedIds = [];
        if (Auth::check()) {
            $completedIds = Auth::user()->completedTrivias()->pluck('trivias.id')->toArray();
        }

        return view('trivias.show', compact('trivia', 'relatedTrivias', 'completedIds'));
    }
}
