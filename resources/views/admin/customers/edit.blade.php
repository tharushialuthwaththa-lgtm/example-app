@extends('layouts.admin')

@section('title','Edit Customer')

@section('content')

<h2>Edit Customer</h2>


<form action="{{ route('customers.update',$customer->id) }}" method="POST">

@csrf
@method('PUT')


<input type="text" name="name"
value="{{ $customer->name }}"
class="form-control mb-2">


<input type="email" name="email"
value="{{ $customer->email }}"
class="form-control mb-2">


<input type="text" name="phone"
value="{{ $customer->phone }}"
class="form-control mb-2">


<input type="text" name="city"
value="{{ $customer->city }}"
class="form-control mb-2">


<input type="number" name="orders"
value="{{ $customer->orders }}"
class="form-control mb-2">


<select name="status" class="form-control mb-2">

<option value="Active"
@if($customer->status=="Active") selected @endif>
Active
</option>


<option value="Inactive"
@if($customer->status=="Inactive") selected @endif>
Inactive
</option>


</select>


<button class="btn btn-primary">
Update Customer
</button>


</form>

@endsection