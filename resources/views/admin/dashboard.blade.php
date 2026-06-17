<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/admin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<div class="wrapper">

    <!-- Sidebar -->
    <div class="sidebar">

        <h2>Fashion Store</h2>

        <ul>

            <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>

            <li><a href="{{ route('products') }}"><i class="fa fa-shirt"></i> Products</a></li>



            <li><a href=""><i class="fa fa-list"></i> Categories</a></li>

            <li><a href=""><i class="fa fa-cart-shopping"></i> Orders</a></li>

            <li><a href=""><i class="fa fa-users"></i> Customers</a></li>

            <li><a href=""><i class="fa fa-chart-line"></i> Reports</a></li>

            <li><a href=""><i class="fa fa-gear"></i> Settings</a></li>

            <li><a href="{{ route('customer-home') }}"><i class="fa fa-right-from-bracket"></i> Logout</a></li>

        </ul>

    </div>

    <!-- Main -->
    <div class="main">

        <div class="topbar">
            <button class="menu-btn" onclick="toggleSidebar()">
                ☰
            </button>

            <h3>Dashboard</h3>

            <h5>Welcome Admin</h5>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card bg-primary">
                    <h5>Total Products</h5>
                    <h2>120</h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card bg-success">
                    <h5>Orders</h5>
                    <h2>85</h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card bg-warning">
                    <h5>Customers</h5>
                    <h2>250</h2>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-card bg-danger">
                    <h5>Revenue</h5>
                    <h2>Rs.250K</h2>
                </div>
            </div>

        </div>

        <div class="row mt-5">

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
                            <td><strong>Rs. 3,500</strong></td>
                            <td><span class="badge bg-success">Paid</span></td>
                            <td><span class="badge bg-primary">Delivered</span></td>
                            <td>06 Jul 2026</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#1002</td>
                            <td>Kasun Silva</td>
                            <td>Men T-Shirt</td>
                            <td>1</td>
                            <td><strong>Rs. 2,200</strong></td>
                            <td><span class="badge bg-warning text-dark">COD</span></td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td>05 Jul 2026</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#1003</td>
                            <td>Amali Fernando</td>
                            <td>Leather Bag</td>
                            <td>1</td>
                            <td><strong>Rs. 4,200</strong></td>
                            <td><span class="badge bg-success">Paid</span></td>
                            <td><span class="badge bg-info">Processing</span></td>
                            <td>04 Jul 2026</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                            </td>
                        </tr>

                        <tr>
                            <td>#1004</td>
                            <td>Saman Jayasuriya</td>
                            <td>Women's Shoes</td>
                            <td>3</td>
                            <td><strong>Rs. 5,600</strong></td>
                            <td><span class="badge bg-danger">Unpaid</span></td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                            <td>03 Jul 2026</td>
                            <td>
                                <button class="btn btn-sm btn-info">View</button>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>



        </div>

    </div>

</div>

@include('component.footer')
<script>

    function toggleMenu(){

        document
            .getElementById("sidebar")
            .classList
            .toggle("active");

    }

</script>
</body>

</html>
