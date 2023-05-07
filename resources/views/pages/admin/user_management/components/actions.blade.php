<a href="javascript:void(0)" class="p-2 float-end" onclick="deleteUser({{ $row->id }})">
    <i class="fas fa-trash text-ash text-right"></i>
</a>


{{-- <a href="javascript:void(0)" class="p-2 float-end" onclick="editUser({{ $row->id }})">
    <i class="fas fa-pencil-alt text-ash text-right"></i>
</a> --}}

<a href="javascript:void(0)" class="p-2 float-end" onclick="restoreUser({{ $row->id }})">
    <i class="fas fa-recycle text-ash text-right"></i>
</a>

@push('scripts')
    <script>
        function deleteUser(userId) {
            Swal.fire({
                title: 'Are You Sure,',
                text: "You Want To Delete This User",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "Yes, Delete IT",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('deleteUser', userId);
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }

        function restoreUser(userId) {
            Swal.fire({
                title: 'Are You Sure,',
                text: "You Want To Restore This User",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "Yes, Restore IT",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('restoreUser', userId);
                    Swal.fire(
                        'Restored!',
                        'Your file has been restored.',
                        'success'
                    )
                }
            })
        }

        function editUser(userId) {
            $('#userEditModal').modal('show');
            getUser(userId);
        }
    </script>
@endpush
