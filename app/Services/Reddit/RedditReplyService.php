<?php

namespace App\Services\Reddit;

use App\Models\Bot;
use App\Models\RedditReply;

class RedditReplyService
{
    public function showAddForm()
    {
        $bots = Bot::orderBy('created_at', 'desc')->where('type', 'reddit')->get();
        return view('reddit.reply.add')->with('bots', $bots);
    }

    public function createReply($request)
    {
        $request->validate([
            'bot_id' => 'required|numeric',
            'reply' => 'required|string'
        ]);

        $bot_id = trim($request['bot_id']);

        $reply = new RedditReply();
        $reply->bot_id = $bot_id;
        $reply->description = $request['reply'];
        $reply->save();

        return redirect()
            ->route('reply.index')
            ->with('success', 'reply added successfully');
    }

    public function getAllReplies()
    {
        $replies = RedditReply::orderBy('created_at', 'desc')->paginate(10);
        return view('reddit.reply.index', compact('replies'));
    }

    public function deleteReply($replyId)
    {
        $reply = RedditReply::where('id', $replyId)->first();
        $reply->delete();

        return redirect()
            ->route('reply.index')
            ->with('success', 'Reply deleted successfully');
    }
}
