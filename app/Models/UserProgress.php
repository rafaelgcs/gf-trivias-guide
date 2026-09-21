<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProgress extends Model
{
    protected $table = 'user_progress';
    protected $fillable = ['user_id', 'trivia_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function trivia(): BelongsTo
    {
        return $this->belongsTo(Trivia::class);
    }
}
