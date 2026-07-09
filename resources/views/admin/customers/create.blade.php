@extends('layouts.admin')

@section('title', 'Add Customer')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h4>Add Customer</h4>
        </div>

        <div class="card-body">

            <form action="" method="POST">
                @csrf

                <div class="mb-3">
                    <label>id</label>
                    <input type="email" id="id" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>


                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone no</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label>City</label>
                    <input type="text" name="city" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Orders</label>
                    <input type="text" name="orders" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control">
                </div>


                <button type="submit" class="btn btn-success">
                    Save Customer
                </button>

            </form>

        </div>
    </div>

@endsection
