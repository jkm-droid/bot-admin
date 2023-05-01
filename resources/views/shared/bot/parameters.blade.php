@extends('base.portal_index')

@section('content')
    <!-- Page Heading -->
    <div style="--bs-breadcrumb-divider: '>';" class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-light mb-0 text-gray-800">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Bots</li>
            <li class="breadcrumb-item active" aria-current="page">{{ $bot->bot_name }}</li>
        </ol>
    </div>
    <div class="col-md-12">
        <div class="col-xs-12 bookmarks-tab">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-subreddit-tab" data-toggle="tab" href="#nav-subreddit"
                       role="tab"
                       aria-controls="nav-subreddit" aria-selected="false">Sub Reddits</a>

                    <a class="nav-item nav-link" id="nav-keyword-tab" data-toggle="tab" href="#nav-keyword"
                       role="tab"
                       aria-controls="nav-keyword" aria-selected="true">Keywords</a>

                    <a class="nav-item nav-link" id="nav-reply-tab" data-toggle="tab" href="#nav-reply"
                       role="tab"
                       aria-controls="nav-reply" aria-selected="false">Replies</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active  underline-text" style="margin-left: 2px;" id="nav-subreddit"
                     role="tabpanel"
                     aria-labelledby="nav-subreddit-tab">
                    @if(count($bot->subreddits) > 0)
                        @include('shared.bot.partials.bot_subreddits')
                    @else
                        <p class="text-center text-danger">No sub reddits associated with this bot</p>
                    @endif
                </div>

                <div class="tab-pane fade underline-text" style="margin-left: 2px;" id="nav-keyword"
                     role="tabpanel" aria-labelledby="nav-keyword-tab">
                    @if(count($bot->keywords) > 0)
                        @include('shared.bot.partials.bot_keywords')
                    @else
                        <p class="text-center text-danger">No keywords associated with this bot</p>
                    @endif
                </div>

                <div class="tab-pane fade underline-text" style="margin-left: 2px;" id="nav-reply" role="tabpanel"
                     aria-labelledby="nav-reply-tab">
                    @if(count($bot->replies) > 0)
                        @include('shared.bot.partials.bot_redditreplies')
                    @else
                        <p class="text-center text-danger">No reddit replies associated with this bot</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
