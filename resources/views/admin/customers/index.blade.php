@extends('layouts.admin')

@section('title','Customers')

@section('content')

<h2>Customers</h2>

<a href="{{ route('admin.customers.create') }}" class="btn btn-primary mb-3">
    Add Customer
</a>

<table class="table table-bordered">

<thead>
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

@foreach($customers as $customer)

<tr>

<td>{{ $customer->id }}</td>

<td>{{ $customer->name }}</td>

<td>{{ $customer->email }}</td>

<td>{{ $customer->phone }}</td>

<td>{{ $customer->city }}</td>

<td>{{ $customer->orders }}</td>

<td>
@if($customer->status == 'Active')
    <span class="badge bg-success">Active</span>
@else
    <span class="badge bg-danger">Inactive</span>
@endif
</td>


<td>

<a href="{{ route('customers.show',$customer->id) }}" 
class="btn btn-info btn-sm">
View
</a>


<a href="{{ route('customers.edit',$customer->id) }}" 
class="btn btn-warning btn-sm">
Edit
</a>


<form action="{{ route('customers.destroy',$customer->id) }}" 
method="POST" 
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Delete
</button>

</form>


</td>

</tr>

@endforeach

</tbody>

</table>

@endsection