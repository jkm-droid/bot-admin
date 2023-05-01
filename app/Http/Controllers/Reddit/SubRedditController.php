<?php

namespace App\Http\Controllers\Reddit;

use App\Http\Controllers\Controller;
use App\Services\Reddit\SubredditService;
use Illuminate\Http\Request;

class SubRedditController extends Controller
{
    /**
     * @var SubredditService
     */
    private $_subredditService;

    public function __construct(SubredditService $subredditService)
    {
        $this->middleware('auth:admin');
        $this->_subredditService = $subredditService;
    }

    public function subredditCreationPage()
    {
        return $this->_subredditService->showAddForm();
    }

    public function createSubreddit(Request $request)
    {
        return $this->_subredditService->createSubreddit($request);
    }

    public function getSubreddits()
    {
        return $this->_subredditService->getAllSubreddits();
    }

    public function deleteSubreddits($subredditId)
    {
        return $this->_subredditService->deleteSubreddit($subredditId);
    }
}
