@include('component.navbar')

@include('component.head')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- Topbar -->
<div class="topbar">

    <button class="menu-btn" onclick="toggleSidebar()">
        ☰
    </button>

    <h3>Customers</h3>

    <h5>Welcome Admin</h5>

</div>

<div class="row g-4">

    <div class="col-lg-3 col-md-6">
        <div class="card dashboard-card bg-primary">
            <h5>Total Customers</h5>
            <h2>250</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card dashboard-card bg-success">
            <h5>Active Customers</h5>
            <h2>220</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card dashboard-card bg-warning">
            <h5>New Customers</h5>
            <h2>35</h2>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card dashboard-card bg-danger">
            <h5>Blocked Customers</h5>
            <h2>8</h2>
        </div>
    </div>

</div>


<div class="card mt-5">

    <div class="card-header bg-dark text-white">
        Customer List
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover">

                <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
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
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>C002</td>
                    <td>Kasun Silva</td>
                    <td>kasun@gmail.com</td>
                    <td>0712345678</td>
                    <td>Kandy</td>
                    <td><span class="badge bg-secondary">Inactive</span></td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</div>
</body>
</html>
