@extends('base.portal_index')

@section('content')
    <!-- Page Heading -->
    <div style="--bs-breadcrumb-divider: '>';" class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-light mb-0 text-gray-800">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Reddit Replies</li>
        </ol>
    </div>

    <div class="col-md-12">
        @if(count($replies) > 0)
            @include('reddit.reply.table')
        @else
            <p class="text-center text-danger">No reddit replies found</p>
        @endif
    </div>
@endsection
