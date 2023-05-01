<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Extracted</th>
            <th>Locked</th>
            <th>Created On</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>
        @if(count($bot->subreddits) > 10)
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Extracted</th>
                <th>Locked</th>
                <th>Created On</th>
                <th colspan="2">Actions</th>
            </tr>
            </tfoot>
        @endif
        <tbody>
        @foreach($bot->subreddits as $subreddit)
            <tr>
                <td>{{ $subreddit->name }}</td>
                <td>{{ $subreddit->is_extracted }}</td>
                <td>{{ $subreddit->is_locked }}</td>
                <td>{{ $subreddit->created_at }}</td>
                <td>
                    <form action="{{ route("subreddit.delete", $subreddit->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete_$subreddit" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
