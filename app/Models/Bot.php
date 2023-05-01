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
     * Get the sub-reddits owned by this bot
     *
     * @return HasMany
     */
    public function subreddits()
    {
        return $this->hasMany(SubReddit::class);
    }

    /**
     * Get the reddit replies owned by this bot
     *
     * @return HasMany
     */
    public function replies()
    {
        return $this->hasMany(RedditReply::class);
    }

    /**
     * Get the submissions owned by this bot
     *
     * @return HasMany
     */
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    /**
     * Get the comments owned by this bot
     *
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the hashtags owned by this bot
     *
     * @return HasMany
     */
    public function hashtags()
    {
        return $this->hasMany(Hashtag::class);
    }

    /**
     * Get the headings owned by this bot
     *
     * @return HasMany
     */
    public function headings()
    {
        return $this->hasMany(Heading::class);
    }

    /**
     * Get the slogans owned by this bot
     *
     * @return HasMany
     */
    public function slogans()
    {
        return $this->hasMany(Slogan::class);
    }

    /**
     * Get the universities owned by this bot
     *
     * @return HasMany
     */
    public function universities()
    {
        return $this->hasMany(University::class);
    }

    /**
     * Get the subjects owned by this bot
     *
     * @return HasMany
     */
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
