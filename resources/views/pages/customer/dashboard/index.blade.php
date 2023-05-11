<x-app-layout>
    <x-slot name="header">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Customer Dashboard</h4>
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
                Welcome {{ Auth::user()->name }}
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-4  mt-3">

                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/Chicken_Kottu.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Kottu</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/190416-chicken-burger-082-1556204252.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Burger</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/Chicken-tikka-16.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Tikka</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/spaghetti-carbonara-recipe-snippet.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Spaghetti Carbonara</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/download.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Noodles</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/vegetable-fried-rice-recipe-1.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Fried Rice</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/Homemade-Salt-and-Vinegar-Chips.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Potato Chips</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('img/sub.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chicken Submarine</h5>
                        </div>
                        <button class="btn btn-info form-control">Add Item</button>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
