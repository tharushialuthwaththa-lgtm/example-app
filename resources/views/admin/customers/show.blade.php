@extends('layouts.admin')

@section('title','Customer Details')

@section('content')

<h2>Customer Details</h2>


<table class="table">

<tr>
<th>Name</th>
<td>{{ $customer->name }}</td>
</tr>


<tr>
<th>Email</th>
<td>{{ $customer->email }}</td>
</tr>


<tr>
<th>Phone</th>
<td>{{ $customer->phone }}</td>
</tr>


<tr>
<th>City</th>
<td>{{ $customer->city }}</td>
</tr>


<tr>
<th>Orders</th>
<td>{{ $customer->orders }}</td>
</tr>


<tr>
<th>Status</th>
<td>{{ $customer->status }}</td>
</tr>


</table>

@endsection