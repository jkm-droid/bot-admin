<?php

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
    Route::post('create', [BotController::class, 'createBot'])->name('create');
    Route::get('bots/index', [BotController::class, 'getBots'])->name('index');
});

Route::name('keyword.')->group(function (){
    Route::get('create/keyword', [KeywordController::class, 'showKeywordCreationPage'])->name('create.form');
    Route::post('create', [KeywordController::class, 'createKeyword'])->name('create');
    Route::get('keywords/index', [KeywordController::class, 'getKeywords'])->name('index');
});
