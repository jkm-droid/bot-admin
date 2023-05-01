<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Services\Shared\BotService;
use App\Services\Shared\KeywordService;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    /**
     * @var KeywordService
     */
    private $_keywordService;

    public function __construct(KeywordService $keywordService)
    {
        $this->middleware('auth:admin');
        $this->_keywordService = $keywordService;
    }

    public function showKeywordCreationPage()
    {
        return $this->_keywordService->showAddForm();
    }

    public function createKeyword(Request $request)
    {
        return $this->_keywordService->createKeyword($request);
    }

    public function getKeywords()
    {
        return $this->_keywordService->getAllKeywords();
    }

    public function deleteKeyword($keywordId)
    {
        return $this->_keywordService->deleteKeyword($keywordId);
    }
    public function deleteBatchKeywords(Request $request)
    {
        return $this->_keywordService->batchDeleteKeywords($request);
    }
}
