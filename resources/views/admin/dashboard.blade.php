@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="row g-4">

        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card bg-primary text-white">
                <div class="card-body text-center">
                    <h5>Total Products</h5>
                    <h2>120</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card bg-success text-white">
                <div class="card-body text-center">
                    <h5>Orders</h5>
                    <h2>85</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card bg-warning">
                <div class="card-body text-center">
                    <h5>Customers</h5>
                    <h2>250</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-card bg-danger text-white">
                <div class="card-body text-center">
                    <h5>Revenue</h5>
                    <h2>Rs. 250K</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow mt-5">

        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Recent Orders</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>#1001</td>
                        <td>Nimal Perera</td>
                        <td>Women's Dress</td>
                        <td>2</td>
                        <td>Rs.3,500</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td><span class="badge bg-primary">Delivered</span></td>
                        <td>06 Jul 2026</td>
                        <td><button class="btn btn-info btn-sm">View</button></td>
                    </tr>

                    <tr>
                        <td>#1002</td>
                        <td>Kasun Silva</td>
                        <td>Men T-Shirt</td>
                        <td>1</td>
                        <td>Rs.2,200</td>
                        <td><span class="badge bg-warning text-dark">COD</span></td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                        <td>05 Jul 2026</td>
                        <td><button class="btn btn-info btn-sm">View</button></td>
                    </tr>

                    <tr>
                        <td>#1003</td>
                        <td>Amali Fernando</td>
                        <td>Leather Bag</td>
                        <td>1</td>
                        <td>Rs.4,200</td>
                        <td><span class="badge bg-success">Paid</span></td>
                        <td><span class="badge bg-info">Processing</span></td>
                        <td>04 Jul 2026</td>
                        <td><button class="btn btn-info btn-sm">View</button></td>
                    </tr>

                    <tr>
                        <td>#1004</td>
                        <td>Saman Jayasuriya</td>
                        <td>Women's Shoes</td>
                        <td>3</td>
                        <td>Rs.5,600</td>
                        <td><span class="badge bg-danger">Unpaid</span></td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td>03 Jul 2026</td>
                        <td><button class="btn btn-info btn-sm">View</button></td>
                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection
