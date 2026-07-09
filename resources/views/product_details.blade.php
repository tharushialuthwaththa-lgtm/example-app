@extends('layouts.app')

@section('content')

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-6">
                <img src="{{ asset('assets/img/sh1.jpg') }}"
                     class="img-fluid rounded shadow">
            </div>

            <div class="col-md-6">

                <h2>Combination White Skirt With Blouse</h2>

                <h3 class="text-danger">Rs.2500</h3>

                <p>
                    High quality women's fashion wear.
                    Comfortable and stylish.
                </p>

                <!-- Size -->

                <label><strong>Size</strong></label>

                <select class="form-control mb-3">

                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>

                </select>

                <!-- Color -->

                <label><strong>Color</strong></label>

                <div class="mb-3">

                    <button class="btn rounded-circle"
                            style="background:red;width:35px;height:35px;"></button>

                    <button class="btn rounded-circle"
                            style="background:black;width:35px;height:35px;"></button>

                    <button class="btn rounded-circle"
                            style="background:blue;width:35px;height:35px;"></button>

                    <button class="btn rounded-circle"
                            style="background:white;border:1px solid #999;width:35px;height:35px;"></button>

                </div>

                <!-- Quantity -->

                <label><strong>Quantity</strong></label>

                <input type="number"
                       class="form-control mb-3"
                       value="1"
                       min="1">

                <button class="btn btn-dark">
                    Add To Cart
                </button>

                <button class="btn btn-success">
                    Buy Now
                </button>

            </div>

        </div>

    </div>

@endsection
