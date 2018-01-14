@extends('frontend.main')
@section('content')
    @include('frontend.partials.booking')
    <br>
    <br>
    <div class="col-md-6 col-md-offset-3">
        <div class="section-title text-center">
            <h2><span>Our featured</span> Products</h2>
            <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
        </div>
    </div>

    @include('frontend.partials.two_wheeler_products')
    @include('frontend.partials.partner')
    @endsection