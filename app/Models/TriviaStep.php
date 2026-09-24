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

    public function getFormattedInstructionAttribute(): string
    {
        if (empty($this->instruction)) {
            return '';
        }

        $safe = e($this->instruction);

        // Format items wrapped in <...> or &lt;...&gt;
        $safe = preg_replace('/&lt;([^&]+)&gt;/', '<span class="text-indigo-300 font-semibold">&lt;$1&gt;</span>', $safe);
        // Format items wrapped in «...»
        $safe = preg_replace('/«([^»]+)»/', '<span class="text-indigo-300 font-semibold">«$1»</span>', $safe);
        // Format items wrapped in [...]
        $safe = preg_replace('/\[([^\]]+)\]/', '<span class="text-amber-300 font-semibold">[$1]</span>', $safe);

        return $safe;
    }
}
