<?php

namespace App\Services\Reddit;

use App\Models\Bot;
use App\Models\Keyword;
use App\Models\SubReddit;

class SubredditService
{
    public function showAddForm()
    {
        $bots = Bot::orderBy('created_at', 'desc')->where('type','reddit')->get();
        return view('reddit.subreddit.add')->with('bots', $bots);
    }

    public function createSubreddit($request)
    {
        $request->validate([
            'bot_id' => 'required|numeric',
            'sub_reddits' => 'required|string'
        ]);

        $bot_id = trim($request['bot_id']);
        $bot = Bot::where('id', $bot_id)->first();
        $subreddits = explode(',',trim($request['sub_reddits']));

        foreach ($subreddits as $subreddit) {
            $dbSubreddit = new SubReddit();
            $dbSubreddit->bot_id = $bot_id;
            $dbSubreddit->name = $subreddit;

            $dbSubreddit->save();
        }

        return redirect()
            ->route('subreddit.index')
            ->with('success', 'sub reddits added successfully');
    }

    public function getAllSubreddits()
    {
        $subreddits = SubReddit::orderBy('created_at', 'desc')->paginate(10);
        return view('reddit.subreddit.index', compact('subreddits'));
    }

    public function deleteSubreddit($subredditId)
    {
        $subreddit = SubReddit::where('id',$subredditId)->first();
        $subreddit->delete();
        return redirect()
            ->route('subreddit.index')
            ->with('success', 'sub reddit deleted successfully');
    }
}
