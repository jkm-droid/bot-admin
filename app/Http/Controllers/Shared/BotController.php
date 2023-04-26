<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Services\Shared\BotService;
use Illuminate\Http\Request;

class BotController extends Controller
{
    /**
     * @var BotService
     */
    private $_botService;

    public function __construct(BotService $botService)
    {
        $this->middleware('auth:admin');
        $this->_botService = $botService;
    }

    public function showBotCreationPage()
    {
        return view('shared.bot.add');
    }

    public function createBot(Request $request)
    {
        return $this->_botService->createBot($request);
    }

    public function getBots()
    {
        return $this->_botService->getAllBots();
    }
}
