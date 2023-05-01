<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Description</th>
            <th>Bot</th>
            <th>Replied</th>
            <th>Upvoted</th>
            <th>Created On</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>
        @if(count($replies) > 10)
            <tfoot>
            <tr>
                <th>Description</th>
                <th>Bot</th>
                <th>Replied</th>
                <th>Upvoted</th>
                <th>Created On</th>
                <th colspan="2">Actions</th>
            </tr>
            </tfoot>
        @endif
        <tbody>
        @foreach($replies as $reply)
            <tr>
                <td>{{ $reply->description }}</td>
                <td>{{ $reply->bot->bot_name }}</td>
                <td>{{ $reply->is_replied }}</td>
                <td>{{ $reply->is_upvoted }}</td>
                <td>{{ $reply->created_at }}</td>
                <td>
                    <form action="{{ route("reply.delete", $reply->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete_reply" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center paginate-mobile">
        {{ $replies->links('pagination.custom_pagination') }}
    </div>
</div>
