<?php

namespace App\Services\Shared;

use App\Models\Bot;
use App\Models\Keyword;
use Illuminate\Support\Facades\Redirect;

class KeywordService
{
    public function showAddForm()
    {
        $bots = Bot::orderBy('created_at', 'desc')->get();
        return view('shared.keyword.add')->with('bots', $bots);
    }

    public function createKeyword($request)
    {
        $request->validate([
            'bot_id' => 'required|numeric',
            'keyword_names' => 'required|string'
        ]);

        $bot_id = trim($request['bot_id']);
        $bot = Bot::where('id', $bot_id)->first();
        $keywords = explode(',',trim($request['keyword_names']));

        foreach ($keywords as $keyword) {
            $dbKeyword = new Keyword();
            $dbKeyword->bot_id = $bot_id;
            $dbKeyword->name = $keyword;
            $dbKeyword->type = $bot->type;

            $dbKeyword->save();
        }

        return redirect()
            ->route('keyword.index')
            ->with('success', 'Keywords added successfully');
    }

    public function getAllKeywords()
    {
        $keywords = Keyword::orderBy('created_at', 'desc')->paginate(10);
        return view('shared.keyword.index', compact('keywords'));
    }
}
