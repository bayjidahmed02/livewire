<div class="container">
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            @include('livewire.user-modal')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userCreate">
                Add new user
            </button>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="d-flex gap-3">
                                <button wire:click="edit({{ $user->id }})" class="btn btn-outline-success px-4"
                                    data-bs-toggle="modal" data-bs-target="#userEdit">Edit</button>
                                <button wire:click="delete({{ $user->id }})" class="btn btn-danger"
                                    data-bs-toggle="modal" data-bs-target="#userDelete">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">no data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>


@push('js')
    <script>
        Livewire.on('create-modal', () => {
            bootstrap.Modal.getOrCreateInstance('#userCreate').hide()
        })
        Livewire.on('edit-modal', () => {
            bootstrap.Modal.getOrCreateInstance('#userEdit').hide()
        })
        Livewire.on('delete-modal', () => {
            bootstrap.Modal.getOrCreateInstance('#userDelete').hide()
        })
    </script>
@endpush
