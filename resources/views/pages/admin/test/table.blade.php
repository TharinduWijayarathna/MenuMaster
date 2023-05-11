<x-app-layout>
    <x-slot name="header">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Table Management</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Table Management
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row text-end">
                <div class="col-10"></div>
                <div class="col-2">
                    <button type="button" class="btn btn-success margin-5 text-white" data-toggle="modal"
                        data-target="#Modal1">
                        Add Table
                    </button>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Listed Tables</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Table Number</th>
                                <th scope="col">Table Type</th>
                                <th scope="col">Table Area</th>
                                <th scope="col">Table Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <tr class="align-middle">
                                <td>1</td>
                                <td>2 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>2</td>
                                <td>4 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr class="align-middle">
                                <td>3</td>
                                <td>6 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr class="align-middle">
                                <td>4</td>
                                <td>8 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr class="align-middle">
                                <td>5</td>
                                <td>10 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>


                            <tr class="align-middle">
                                <td>6</td>
                                <td>2 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>7</td>
                                <td>4 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr class="align-middle">
                                <td>8</td>
                                <td>2 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>9</td>
                                <td>4 Seater</td>
                                <td>Indoor</td>
                                <td>Available</td>
                                <td align="center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-warning form-control">Update</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-danger form-control">Delete</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
