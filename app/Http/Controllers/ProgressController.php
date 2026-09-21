<?php

namespace App\Http\Controllers;

use App\Models\Trivia;
use App\Models\UserProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    public function toggle(Request $request)
    {
        $request->validate([
            'trivia_id' => 'required|exists:trivias,id',
        ]);

        $triviaId = $request->input('trivia_id');

        if (!Auth::check()) {
            return response()->json([
                'success' => true,
                'mode' => 'guest',
                'message' => 'Progresso salvo no navegador via localStorage.'
            ]);
        }

        $userId = Auth::id();
        $existing = UserProgress::where('user_id', $userId)->where('trivia_id', $triviaId)->first();

        if ($existing) {
            $existing->delete();
            $completed = false;
        } else {
            UserProgress::create([
                'user_id' => $userId,
                'trivia_id' => $triviaId,
            ]);
            $completed = true;
        }

        $completedCount = Auth::user()->completedTrivias()->count();
        $completedPoints = $completedCount * 2;

        return response()->json([
            'success' => true,
            'mode' => 'user',
            'completed' => $completed,
            'completed_count' => $completedCount,
            'completed_points' => $completedPoints,
        ]);
    }
}
