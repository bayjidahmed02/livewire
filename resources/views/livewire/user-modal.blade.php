{{-- create modal --}}
<div wire:ignore.self class="modal fade" id="userCreate" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='store'>
                <div class="modal-body">
                    <div class="mb-lg-3">
                        <label for="">Name</label>
                        <input type="text" name="name" wire:model="name" class="form-control">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-lg-3">
                        <label for="">Phone</label>
                        <input type="text" name="phone" wire:model="phone" class="form-control">
                        @error('phone')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-lg-3">
                        <label for="">Email</label>
                        <input type="email" name="email" wire:model="email" class="form-control">
                        @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        id="close-modal">Close</button>
                    <button class="btn btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- edit modal --}}
<div wire:ignore.self class="modal fade" id="userEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='update'>
                <div class="modal-body">
                    <div class="mb-lg-3">
                        <label for="">Name</label>
                        <input type="text" name="name" wire:model="name" class="form-control">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-lg-3">
                        <label for="">Phone</label>
                        <input type="text" name="phone" wire:model="phone" class="form-control">
                        @error('phone')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-lg-3">
                        <label for="">Email</label>
                        <input type="email" name="email" wire:model="email" class="form-control">
                        @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        id="close-modal">Close</button>
                    <button class="btn btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- delete modal --}}
<div wire:ignore.self class="modal fade" id="userDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='destroy'>
                <div class="modal-body">
                    <h1 class="text-danger font-weight-bold">Delete!</h1>
                    <p>are you sure! want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        id="close-modal">Close</button>
                    <button class="btn btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
