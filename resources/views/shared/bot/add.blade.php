@extends('base.portal_index')

@section('content')
    <!-- Page Heading -->
    <div style="--bs-breadcrumb-divider: '>';" class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-light mb-0 text-gray-800" >
            <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Bot</li>
        </ol>
    </div>

    <div class="col-md-12">
        <form action="{{ route('bot.create.new_bot') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bot Name</label>
                    <input type="text" name="bot_name" class="form-control" value="{{ old('bot_name') }}" placeholder="Name" aria-label="Reference Number">
                    @if ($errors->has('bot_name'))
                        <div class="text-danger form-text"><small>{{ $errors->first('bot_name') }}</small></div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Type</label>
                    <select class="form-select form-control" name="type" aria-label="Default select example">
                        <option disabled selected>Select bot type</option>
                        <option name="reddit" value="reddit">Reddit</option>
                        <option name="twitter" value="twitter">Twitter</option>
                    </select>
                    @if ($errors->has('type'))
                        <div class="text-danger form-text"><small>{{ $errors->first('type') }}</small></div>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-secondary">Add Bot</button>
        </form>
    </div>
@endsection
