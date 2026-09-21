<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = ['user_id', 'trivia_id', 'guide_id', 'content'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function trivia(): BelongsTo
    {
        return $this->belongsTo(Trivia::class);
    }

    public function guide(): BelongsTo
    {
        return $this->belongsTo(Guide::class);
    }
}
