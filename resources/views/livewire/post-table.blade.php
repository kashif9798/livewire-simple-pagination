<div class="table-responsive">
    <table class="table">
        <input type="text" class="form-control" wire:model="search" placeholder="Search">
        <thead>
            <tr>
                <th>
                    <input id="head-checkbox" type="checkbox">
                </th>
                <th>DB ID</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>

@push('script')
    <script>
        $(document).ready(function(){
            $("#head-checkbox").click(function(){
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        });
    </script>
@endpush
