<x-app-layout>
    <x-slot name="header">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Library
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
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-view-dashboard"></i>
                            </h1>
                            <h6 class="text-white">Dashboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-chart-bar"></i>
                            </h1>
                            <h6 class="text-white">Stock</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-file-document"></i>
                            </h1>
                            <h6 class="text-white">Reports</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-box"></i>
                            </h1>
                            <h6 class="text-white">Products</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-0">Top Selling Item</h5>
                </div>
                <table class="table">
                    <thead>
                        <tr class="">
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Availability</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cheese Kottu</td>
                            <td class="text-success">Progress</td>
                            <td>
                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-bs-original-title="Update">
                                    <i class="mdi mdi-check"></i>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-bs-original-title="Delete">
                                    <i class="mdi mdi-close"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Chicken Buriyani</td>
                            <td class="text-warning">Pending</td>
                            <td>
                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-bs-original-title="Update">
                                    <i class="mdi mdi-check"></i>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-bs-original-title="Delete">
                                    <i class="mdi mdi-close"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Garlic Bread with Cheese</td>
                            <td class="text-danger">Cancled</td>
                            <td>
                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-bs-original-title="Update">
                                    <i class="mdi mdi-check"></i>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-bs-original-title="Delete">
                                    <i class="mdi mdi-close"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daily Sales Chart</h5>
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </x-slot>
</x-app-layout>
