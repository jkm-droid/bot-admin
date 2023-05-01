@extends('base.portal_index')

@section('content')
    <!-- Page Heading -->
    <div style="--bs-breadcrumb-divider: '>';" class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-light mb-0 text-gray-800">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">SubReddit</li>
        </ol>
    </div>

    <div class="col-md-12">
        @if(count($subreddits) > 0)
            @include('reddit.subreddit.table')
        @else
            <p class="text-center text-danger">No subreddits found</p>
        @endif
    </div>
@endsection
