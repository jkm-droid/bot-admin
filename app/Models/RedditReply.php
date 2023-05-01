<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RedditReply extends Model
{
    use HasFactory;

    /**
     * Get the reddit bot who owns this reply
     *
     * @return BelongsTo
     */
    public function bot()
    {
        return $this->belongsTo(Bot::class)->where('type','reddit');
    }
}
