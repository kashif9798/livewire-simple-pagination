<div class="table-responsive">
    <table class="table">
        <form wire:submit.prevent='search'>
            <input type="text" class="form-control" wire:model.lazy="search" placeholder="Search">
            <input type="submit" value="search">
        </form>
        <thead>
            <tr>
                <th>DB ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->name }}
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
    {{ $users->links() }}
</div>
