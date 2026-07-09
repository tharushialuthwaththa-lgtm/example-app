@extends('layouts.admin')

@section('title', 'Customers')

@section('content')

    <div class="row g-4 mb-4">

        <div class="col-lg-4 col-md-6">
            <div class="card bg-primary text-white shadow">
                <div class="card-body text-center">
                    <h5>Total Customers</h5>
                    <h2>250</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card bg-success text-white shadow">
                <div class="card-body text-center">
                    <h5>Active Customers</h5>
                    <h2>220</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card bg-warning shadow">
                <div class="card-body text-center">
                    <h5>New Customers</h5>
                    <h2>30</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow">

        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Customer List</h5>

            <button class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Add Customer
            </button>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Orders</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    </thead>

                    <tbody>

                    <tr>
                        <td>C001</td>
                        <td>Nimal Perera</td>
                        <td>nimal@gmail.com</td>
                        <td>0771234567</td>
                        <td>Colombo</td>
                        <td>10</td>
                        <td><span class="badge bg-success">Active</span></td>
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
                        <td>C002</td>
                        <td>Kasun Silva</td>
                        <td>kasun@gmail.com</td>
                        <td>0712345678</td>
                        <td>Kandy</td>
                        <td>5</td>
                        <td><span class="badge bg-success">Active</span></td>
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
                        <td>C003</td>
                        <td>Amali Fernando</td>
                        <td>amali@gmail.com</td>
                        <td>0769876543</td>
                        <td>Galle</td>
                        <td>8</td>
                        <td><span class="badge bg-secondary">Inactive</span></td>
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
                        <td>C004</td>
                        <td>Saman Jayasuriya</td>
                        <td>saman@gmail.com</td>
                        <td>0754567890</td>
                        <td>Matara</td>
                        <td>3</td>
                        <td><span class="badge bg-success">Active</span></td>
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
