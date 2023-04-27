<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Status</th>
            <th>Initialized</th>
            <th>Created On</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>
        @if(count($bots) > 10)
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Initialized</th>
                <th>Created On</th>
                <th colspan="2">Actions</th>
            </tr>
            </tfoot>
        @endif
        <tbody>
        @foreach($bots as $bot)
            <tr>
                <td><a href="{{ route('bot.parameters',[$bot->id,$bot->type]) }}">{{ $bot->bot_name }}</a></td>
                <td>{{ $bot->type }}</td>
                <td>{{ $bot->is_active }}</td>
                <td>{{ $bot->is_initialized }}</td>
                <td>{{ $bot->created_at }}</td>
                <td>
                    <form action="{{ route("bot.delete", $bot->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete_bot" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center paginate-mobile">
        {{ $bots->links('pagination.custom_pagination') }}
    </div>
</div>
