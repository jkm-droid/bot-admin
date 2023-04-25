<?php

namespace App\Services\Shared;

use App\Models\Bot;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BotService
{

    public function createBot($request)
    {
        $request->validate([
            'bot_name' => 'required|unique:contributions',
            'type' => 'required|numeric',
        ]);

        $bot = new Bot($request->all());
        $bot->is_active = true;
        $bot->user_id = Auth::user()->getAuthIdentifier();

        $bot->save();

        return redirect()
            ->route('bot.index')
            ->with('success','Bot added successfully');
    }
}
