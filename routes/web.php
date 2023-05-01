<?php

use App\Http\Controllers\Reddit\RedditReplyController;
use App\Http\Controllers\Reddit\SubRedditController;
use App\Http\Controllers\Shared\BotController;
use App\Http\Controllers\Shared\KeywordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::name('bot.')->group(function (){
    Route::get('create/bot', [BotController::class, 'showBotCreationPage'])->name('create.form');
    Route::post('create-bot', [BotController::class, 'createBot'])->name('create.new_bot');
    Route::get('bots/index', [BotController::class, 'getBots'])->name('index');
    Route::delete('bot/delete/{botId}', [BotController::class, 'deleteBot'])->name('delete');
    Route::get('bot/{id}/parameters/{type}', [BotController::class, 'getBotParameters'])->name('parameters');
});

Route::name('keyword.')->group(function (){
    Route::get('create/keyword', [KeywordController::class, 'showKeywordCreationPage'])->name('create.form');
    Route::post('create-keyword', [KeywordController::class, 'createKeyword'])->name('add.new_keyword');
    Route::get('keywords/index', [KeywordController::class, 'getKeywords'])->name('index');
    Route::delete('keyword/delete/{keywordId}', [KeywordController::class, 'deleteKeyword'])->name('delete');
    Route::post('delete/batch-keywords', [KeywordController::class, 'deleteBatchKeywords'])->name('delete.batch');
});

Route::name('subreddit.')->group(function (){
    Route::get('create/subreddit', [SubRedditController::class, 'subredditCreationPage'])->name('create.form');
    Route::post('create-sub-reddit', [SubRedditController::class, 'createSubreddit'])->name('create');
    Route::get('subreddits/index', [SubRedditController::class, 'getSubreddits'])->name('index');
    Route::delete('subreddit/delete/{subredditId}', [SubRedditController::class, 'deleteSubreddits'])->name('delete');
});

Route::name('reply.')->group(function (){
    Route::get('create/reddit/reply', [RedditReplyController::class, 'replyCreationPage'])->name('create.form');
    Route::post('create-reddit-reply', [RedditReplyController::class, 'createRedditReply'])->name('create');
    Route::get('reddit/replies/index', [RedditReplyController::class, 'getRedditReplies'])->name('index');
    Route::delete('reddit/delete/{replyId}', [RedditReplyController::class, 'deleteReply'])->name('delete');
});
