@extends('layouts.admin')

@section('title','Add Customer')

@section('content')

<h2>Add Customer</h2>


<form action="{{ route('customers.store') }}" method="POST">

@csrf


<input type="text" name="name" 
placeholder="Customer Name"
class="form-control mb-2">


<input type="email" name="email"
placeholder="Email"
class="form-control mb-2">


<input type="text" name="phone"
placeholder="Phone"
class="form-control mb-2">


<input type="text" name="city"
placeholder="City"
class="form-control mb-2">


<input type="number" name="orders"
placeholder="Orders"
class="form-control mb-2">


<select name="status" class="form-control mb-2">

<option value="Active">Active</option>

<option value="Inactive">Inactive</option>

</select>


<button class="btn btn-success">
Save Customer
</button>


</form>

@endsection