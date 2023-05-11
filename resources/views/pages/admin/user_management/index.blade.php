<x-app-layout>
    <x-slot name="header">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">User Management</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    User Management
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="content">
        <div class="row text-end">
            <div class="col-10"></div>
            <div class="col-2">
                <button type="button" class="btn btn-success margin-5 text-white mb-3" data-toggle="modal"
                    data-target="#Modal1">
                    Add User
                </button>
            </div>
        </div>
        <livewire:admin.user-management.tables.all />
    </x-slot>
    @push('modals')
        <div class="modal fade" id="userEditModal" tabindex="-1" aria-labelledby="userEditModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userEditModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <livewire:admin.user-management.basic.edit />
                </div>
            </div>
        </div>
    @endpush

    @push('scripts')
    @endpush
</x-app-layout>
