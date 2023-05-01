<?php

namespace App\Http\Controllers\Reddit;

use App\Http\Controllers\Controller;
use App\Services\Reddit\RedditReplyService;
use Illuminate\Http\Request;

class RedditReplyController extends Controller
{
    /**
     * @var RedditReplyService
     */
    private $_redditReplyService;

    public function __construct(RedditReplyService $redditReplyService)
    {
        $this->middleware('auth:admin');
        $this->_redditReplyService = $redditReplyService;
    }

    public function replyCreationPage()
    {
        return $this->_redditReplyService->showAddForm();
    }

    public function createRedditReply(Request $request)
    {
        return $this->_redditReplyService->createReply($request);
    }

    public function getRedditReplies()
    {
        return $this->_redditReplyService->getAllReplies();
    }

    public function deleteReply($replyId)
    {
        return $this->_redditReplyService->deleteReply($replyId);
    }
}
