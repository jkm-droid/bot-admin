<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keyword extends Model
{
    use HasFactory;
    protected $fillable = [
        'bot_id',
        'name',
        'type'
    ];

    /**
     * Get the bot who owns this keyword
     *
     * @return BelongsTo
     */
    public function bot()
    {
        return $this->belongsTo(Bot::class);
    }
}
