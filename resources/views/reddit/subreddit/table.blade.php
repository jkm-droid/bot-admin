<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Bot</th>
            <th>Extracted</th>
            <th>Locked</th>
            <th>Created On</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>
        @if(count($subreddits) > 10)
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Bot</th>
                <th>Extracted</th>
                <th>Locked</th>
                <th>Created On</th>
                <th colspan="2">Actions</th>
            </tr>
            </tfoot>
        @endif
        <tbody>
        @foreach($subreddits as $subreddit)
            <tr>
                <td>{{ $subreddit->name }}</td>
                <td>{{ $subreddit->bot->bot_name }}</td>
                <td>{{ $subreddit->is_extracted }}</td>
                <td>{{ $subreddit->is_locked }}</td>
                <td>{{ $subreddit->created_at }}</td>
                <td>
                    <form action="{{ route("subreddit.delete", $subreddit->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete_subreddit" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center paginate-mobile">
        {{ $subreddits->links('pagination.custom_pagination') }}
    </div>
</div>
