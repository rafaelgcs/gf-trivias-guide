<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trivia extends Model
{
    protected $table = 'trivias';
    protected $fillable = ['zone_id', 'item_title', 'history_title', 'points', 'notes', 'sort_order'];

    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }

    public function steps(): HasMany
    {
        return $this->hasMany(TriviaStep::class)->orderBy('step_number', 'asc');
    }

    public function guides(): HasMany
    {
        return $this->hasMany(Guide::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
