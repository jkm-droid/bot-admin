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
        @if(count($keywords) > 10)
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
        @foreach($keywords as $keyword)
            <tr>
                <td>{{ $keyword->name }}</td>
                <td>{{ $keyword->type }}</td>
                <td>{{ $keyword->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center paginate-mobile">
        {{ $keywords->links('pagination.custom_pagination') }}
    </div>
</div>
