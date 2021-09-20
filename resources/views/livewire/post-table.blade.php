<div class="table-responsive">
    <table class="table">
        <input type="text" class="form-control" wire:model="search" placeholder="Search">
        <thead>
            <tr>
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
