
@extends('layouts.admin')

@section('title','Orders')

@section('content')

    <div class="container-fluid">

        <div class="row g-4 mb-4">

            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body text-center">
                        <h5>Total Orders</h5>
                        <h2>150</h2>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white shadow">
                    <div class="card-body text-center">
                        <h5>Completed</h5>
                        <h2>120</h2>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning shadow">
                    <div class="card-body text-center">
                        <h5>Pending</h5>
                        <h2>20</h2>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white shadow">
                    <div class="card-body text-center">
                        <h5>Cancelled</h5>
                        <h2>10</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="card shadow">

            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Recent Orders</h4>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle">

                        <thead class="table-dark">

                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>

                        </thead>

                        <tbody>

                        <tr>
                            <td>#ORD001</td>
                            <td>Nimal Perera</td>
                            <td>Men T-Shirt</td>
                            <td>2</td>
                            <td>Rs.4000</td>
                            <td><span class="badge bg-success">Paid</span></td>
                            <td><span class="badge bg-primary">Delivered</span></td>
                            <td>06 Jul 2026</td>
                            <td>
                                <button class="btn btn-info btn-sm">View</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#ORD002</td>
                            <td>Kasun Silva</td>
                            <td>Women's Dress</td>
                            <td>1</td>
                            <td>Rs.3500</td>
                            <td><span class="badge bg-warning text-dark">COD</span></td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td>05 Jul 2026</td>
                            <td>
                                <button class="btn btn-info btn-sm">View</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection
