@extends('base.portal_index')

@section('content')
    <!-- Page Heading -->
    <div style="--bs-breadcrumb-divider: '>';" class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-light mb-0 text-gray-800" >
            <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Keyword</li>
        </ol>
    </div>

    <div class="col-md-12">
        <form action="{{ route('keyword.add.new_keyword') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Bot</label>
                    <select class="form-select form-control" name="bot_id" aria-label="Default select example">
                        <option disabled selected>Select bot</option>
                        @foreach($bots as $bot)
                            <option name="{{ $bot->bot_name }}" value="{{ $bot->id }}">{{ $bot->bot_name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('bot_id'))
                        <div class="text-danger form-text"><small>{{ $errors->first('bot_id') }}</small></div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Keyword(s)</label>
                    <textarea type="text" name="keyword_names" class="form-control" rows="6" placeholder="Add keywords separated by comma"></textarea>
                    @if ($errors->has('keyword_names'))
                        <div class="text-danger form-text"><small>{{ $errors->first('keyword_names') }}</small></div>
                    @endif
                </div>
            </div>


            <button type="submit" class="btn btn-secondary">Add Keyword(s)</button>
        </form>
    </div>
@endsection
