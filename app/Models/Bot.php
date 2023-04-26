<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bot extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bot_name',
        'type',
        'is_active'
    ];

    /**
     * Get the user who owns this bot
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the keywords owned by this bot
     *
     * @return HasMany
     */
    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }

    /**
     * Get the subjects owned by this bot
     *
     * @return HasMany
     */
    public function subjects()
    {
        return $this->hasMany(Keyword::class);
    }
}
