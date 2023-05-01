<div>
    <button class="btn-danger" id="delete-selected" style="display: none">Delete Selected</button>
</div>
<div class="table-responsive keywords-table">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>
                <span class="form-check-inline" style="margin: 0">
                    <input class="form-check-input" type="checkbox" value="" id="checkAllKeywords">
                </span>
            </th>
            <th>Name</th>
            <th>Bot</th>
            <th>Type</th>
            <th>Created On</th>
            <th colspan="2">Actions</th>
        </tr>
        </thead>
        @if(count($keywords) > 10)
            <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Bot</th>
                <th>Type</th>
                <th>Created On</th>
                <th colspan="2">Actions</th>
            </tr>
            </tfoot>
        @endif
        <tbody>
        @foreach($keywords as $keyword)
            <tr>
                <td>
                    <div class="form-check m-0">
                        <input class="form-check-input" type="checkbox" name="keyword-checkbox"
                               value="{{ $keyword->id }}" id="keywordCheckbox">
                    </div>
                </td>
                <td>{{ $keyword->name }}</td>
                <td>{{ $keyword->bot->bot_name }}</td>
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
    <div class="d-flex justify-content-center paginate-mobile">
        {{ $keywords->links('pagination.custom_pagination') }}
    </div>
</div>

<script>
    $("#checkAllKeywords").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
        $("#delete-selected").show();
    });

    $('input:checkbox').click(function () {
        $("#delete-selected").show();
    });

    $(document).ready(function () {
        $("#delete-selected").click(function () {
            const selectedIds = getCheckBoxes();
            console.log(selectedIds);
            $.ajax({
                url: '/delete/batch-keywords',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'keywordIds': selectedIds,
                },
                success: function (response) {
                    if (response.status === 200){
                        toastr.success("deleted selected items successfully");
                    }else{
                        toastr.error("an error selected occurred");
                    }
                    setTimeout(function (){
                        location.reload();
                        scrollToPosition();
                    },4000);
                },

                failure: function (response) {
                    console.log("something went wrong");
                }
            });
        });
    });

    function getCheckBoxes(){
        const ids = [];
        $.each($("input[name='keyword-checkbox']:checked"), function(){
            ids.push($(this).val());
        });

        return ids;
    }
</script>
