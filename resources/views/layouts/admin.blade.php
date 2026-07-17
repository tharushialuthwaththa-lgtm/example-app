<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Store Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<div class="wrapper">

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">

        <h2>Fashion Store</h2>

        <ul>

            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('products') }}">
                    <i class="fa fa-shirt"></i> Products
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-list"></i> Categories
                </a>
            </li>

            <li>
                <a href="{{ route('admin.orders') }}">
                    <i class="fa fa-cart-shopping"></i> Orders
                </a>
            </li>

            <li>
                <a href="{{ route('customer.index') }}">
                    <i class="fa fa-users"></i> Customers
                </a>

               
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-chart-line"></i> Reports
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-gear"></i> Settings
                </a>
            </li>

            <li>
                <a href="{{ route('customers-home') }}">
                    <i class="fa fa-right-from-bracket"></i> Logout
                </a>
            </li>

        </ul>

    </div>

    <!-- Main Content -->
    <div class="main">

        <div class="topbar">

            <button class="menu-btn" onclick="toggleSidebar()">
                ☰
            </button>

            <h3>@yield('title')</h3>

            <h5>Welcome Admin</h5>

        </div>

        <div class="container-fluid mt-4">
            @yield('content')
        </div>

    </div>

</div>

<script>
    function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle("active");
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@include('component.footer')
</body>
</html>
