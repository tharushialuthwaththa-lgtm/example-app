@extends('layouts.admin')

@section('title', 'Products')

@section('content')

    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">
            <div class="card bg-primary text-white shadow">
                <div class="card-body text-center">
                    <h5>Total Products</h5>
                    <h2>120</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card bg-success text-white shadow">
                <div class="card-body text-center">
                    <h5>In Stock</h5>
                    <h2>95</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card bg-warning shadow">
                <div class="card-body text-center">
                    <h5>Low Stock</h5>
                    <h2>18</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card bg-danger text-white shadow">
                <div class="card-body text-center">
                    <h5>Out of Stock</h5>
                    <h2>7</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow">

        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Product List</h5>

            <button class="btn btn-success">
                <i class="fa fa-plus"></i> Add Product
            </button>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    </thead>

                    <tbody>

                    <tr>
                        <td>P001</td>

                        <td>
                            <img src="{{ asset('assets/img/img1.jpg') }}"
                                 width="60"
                                 class="rounded">
                        </td>

                        <td>Men T-Shirt</td>
                        <td>Clothing</td>
                        <td>Rs. 2,500</td>
                        <td>45</td>

                        <td>
                            <span class="badge bg-success">Available</span>
                        </td>

                        <td>
                            <button class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="fa fa-pen"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>P002</td>

                        <td>
                            <img src="{{ asset('assets/img/img2.jpg') }}"
                                 width="60"
                                 class="rounded">
                        </td>

                        <td>Women's Dress</td>
                        <td>Dress</td>
                        <td>Rs. 4,500</td>
                        <td>30</td>

                        <td>
                            <span class="badge bg-success">Available</span>
                        </td>

                        <td>
                            <button class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="fa fa-pen"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>P003</td>

                        <td>
                            <img src="{{ asset('assets/img/img3.jpg') }}"
                                 width="60"
                                 class="rounded">
                        </td>

                        <td>Sports Shoes</td>
                        <td>Footwear</td>
                        <td>Rs. 6,500</td>
                        <td>8</td>

                        <td>
                        <span class="badge bg-warning text-dark">
                            Low Stock
                        </span>
                        </td>

                        <td>
                            <button class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="fa fa-pen"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>P004</td>

                        <td>
                            <img src="{{ asset('assets/img/sh1.jpg') }}"
                                 width="60"
                                 class="rounded">
                        </td>

                        <td>Leather Bag</td>
                        <td>Bags</td>
                        <td>Rs. 8,000</td>
                        <td>0</td>

                        <td>
                        <span class="badge bg-danger">
                            Out of Stock
                        </span>
                        </td>

                        <td>
                            <button class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="fa fa-pen"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection
