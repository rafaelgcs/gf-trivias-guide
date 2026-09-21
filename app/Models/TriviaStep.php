<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TriviaStep extends Model
{
    protected $fillable = ['trivia_id', 'step_number', 'npc_name', 'coordinates', 'item_required', 'instruction'];

    public function trivia(): BelongsTo
    {
        return $this->belongsTo(Trivia::class);
    }
}
