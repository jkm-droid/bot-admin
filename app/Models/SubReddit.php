<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubReddit extends Model
{
    use HasFactory;
    protected $fillable = [
        'bot_id',
        'name',
    ];
    /**
     * Get the bot who owns this subreddit
     *
     * @return BelongsTo
     */
    public function bot()
    {
        return $this->belongsTo(Bot::class);
    }
}
