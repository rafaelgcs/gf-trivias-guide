<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guide extends Model
{
    protected $fillable = ['user_id', 'trivia_id', 'title', 'slug', 'content', 'is_approved', 'views_count'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function trivia(): BelongsTo
    {
        return $this->belongsTo(Trivia::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
