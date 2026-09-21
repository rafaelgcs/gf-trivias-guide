<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    protected $fillable = ['city', 'name', 'slug', 'description', 'sort_order'];

    public function trivias(): HasMany
    {
        return $this->hasMany(Trivia::class)->orderBy('sort_order', 'asc');
    }
}
