<?php

namespace App\Services\Shared;

use App\Models\Bot;
use Illuminate\Support\Facades\Auth;

class BotService
{
    public function createBot($request)
    {
        $request->validate([
            'bot_name' => 'required|unique:bots',
            'type' => 'required|string',
        ]);

        $bot = new Bot();
        $bot->bot_name = $request['bot_name'];
        $bot->type = $request['type'];
        $bot->is_active = true;
        $bot->user_id = 2;

        $bot->save();

        return redirect()
            ->route('bot.index')
            ->with('success', 'Bot added successfully');
    }

    public function getAllBots()
    {
        $bots = Bot::orderBy('created_at', 'desc')->paginate(10);
        return view('shared.bot.index',compact('bots'));
    }

    public function deleteBot($id)
    {
        $bot = Bot::where('id',$id)->first();
        $bot->delete();
        return redirect()
            ->route('bot.index')
            ->with('success', 'Bot deleted successfully');
    }

    public function botParameters($id, $type)
    {
            $bot = Bot::where('id',$id)
                ->where('type',$type)
                ->first();

        return view('shared.bot.parameters')->with('bot',$bot);
    }
}
