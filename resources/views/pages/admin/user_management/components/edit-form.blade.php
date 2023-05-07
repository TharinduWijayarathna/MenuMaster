<form role="form text-left" wire:submit.prevent="submit" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group mt-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" wire:model='user.name' id="name"
                placeholder="Enter Password">
            @error('user.name')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>
        <div class="form-group mt-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" wire:model='user.email' id="email"
                placeholder="Enter Password">
            @error('user.email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password" wire:model='user.password' placeholder="Enter Password">
            @error('user.password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" wire:model='user.password_confirmation' id="password_confirmation"
                placeholder="Enter Password Confirmation">
            @error('user.password_confirmation')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>

@push('scripts')
    <script>
        function getUser(id) {
            @this.call('getUser', id)
        }
    </script>
@endpush
