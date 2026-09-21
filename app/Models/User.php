<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function completedTrivias(): BelongsToMany
    {
        return $this->belongsToMany(Trivia::class, 'user_progress', 'user_id', 'trivia_id')->withTimestamps();
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
