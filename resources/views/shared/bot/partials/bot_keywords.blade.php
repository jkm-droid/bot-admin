<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Created On</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>
        @if(count($bot->keywords) > 10)
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Created On</th>
                <th colspan="2">Actions</th>
            </tr>
            </tfoot>
        @endif
        <tbody>
        @foreach($bot->keywords as $keyword)
            <tr>
                <td>{{ $keyword->name }}</td>
                <td>{{ $keyword->type }}</td>
                <td>{{ $keyword->created_at }}</td>
                <td>
                    <form action="{{ route("keyword.delete", $keyword->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete_keyword" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
