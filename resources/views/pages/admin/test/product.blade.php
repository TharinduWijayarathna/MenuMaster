<x-app-layout>
    <x-slot name="header">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Product Management</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Product Management
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
                        Add Product
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Listed Products</h5>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Product Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Dish Type</th>
                                <th scope="col">Category</th>
                                <th scope="col">Additional Requirements</th>
                                <th scope="col" class="text-end">Price</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <tr class="align-middle">
                                <td align="center">
                                    <img src="{{ asset('img/190416-chicken-burger-082-1556204252.jpg') }}"
                                        alt="product" class="img-fluid rounded-circle" width="120" height="120" />
                                </td>
                                <td>Chicken Burger</td>
                                <td>Non-Veg</td>
                                <td>Fast Food</td>
                                <td>Extra Cheese / Extra Chicken</td>
                                <td align="right">Rs. 150.00</td>
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
                                <td align="center">
                                    <img src="{{ asset('img/Chicken-tikka-16.jpg') }}" alt="product"
                                        class="img-fluid rounded-circle" width="120" height="120" />
                                </td>
                                <td>Chiken Tikka</td>
                                <td>Non-Veg</td>
                                <td>Fast Food</td>
                                <td>Extra Cheese / Extra Sauce </td>
                                <td align="right">Rs. 360.00</td>
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
                                <td align="center">
                                    <img src="{{ asset('img/Chicken_Kottu.jpg') }}" alt="product"
                                        class="img-fluid rounded-circle" width="120" height="120" />
                                </td>
                                <td>Chiken Tikka</td>
                                <td>Non-Veg</td>
                                <td>Fast Food</td>
                                <td>Extra Cheese / Extra Spice</td>
                                <td align="right">Rs. 300.00</td>
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
                                <td align="center">
                                    <img src="{{ asset('img/spaghetti-carbonara-recipe-snippet.jpg') }}" alt="product"
                                        class="img-fluid rounded-circle" width="120" height="120" />
                                </td>
                                <td>Spegetti Carbonara</td>
                                <td>Non-Veg</td>
                                <td>Fast Food</td>
                                <td>Extra Cheese / Extra Spice</td>
                                <td align="right">Rs. 400.00</td>
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
