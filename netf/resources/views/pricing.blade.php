@extends('layouts.app')

@section('content')

    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('images/asset-25.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                Pricing Table
                            </h1>
                        </div>
                        <div class="gen-breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i
                                            class="fas fa-home mr-2"></i>Home</a></li>
                                <li class="breadcrumb-item active">Pricing Table</li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- Pricing Plan Start -->
    <section class="gen-section-padding-3">
        <div class="container container-2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="gen-price-block text-center">
                        <div class="gen-price-detail">
                            <span class="gen-price-title"> BASIC </span>
                            <h2 class="price">$ 29.00</h2>
                            <p class="gen-price-duration">/ Per Month</p>
                            <div class="gen-bg-effect">
                                <img src="images/asset-54.jpg" alt="stream-lab-image">
                            </div>
                        </div>
                        <ul class="gen-list-info">
                            <li>
                                Number Of Screen
                            </li>
                            <li>
                                On how many device you can Download
                            </li>
                            <li>
                                Unlimited TV shows and movies
                            </li>
                            <li>
                                <del>watch on mobile and tablet</del>
                            </li>
                            <li>
                                <del>watch on laptop and tv</del>
                            </li>
                            <li>
                                <del>HD available</del>
                            </li>
                            <li>
                                <del>ultra HD available</del>
                            </li>
                        </ul>
                        <div class="gen-btn-container button-1">
                            <a href="#" class="gen-button">
                                <span class="text">Purchase now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mt-3 mt-md-0">
                    <div class="gen-price-block text-center active">
                        <div class="gen-price-detail">
                            <span class="gen-price-title"> Standard </span>
                            <h2 class="price">$ 99.00</h2>
                            <p class="gen-price-duration">/ Per Month</p>
                            <div class="gen-bg-effect">
                                <img src="images/asset-54.jpg" alt="architek-image">
                            </div>
                        </div>
                        <ul class="gen-list-info">
                            <li>
                                Number Of Screen
                            </li>
                            <li>
                                On how many device you can Download
                            </li>
                            <li>
                                Unlimited TV shows and movies
                            </li>
                            <li>
                                <del>watch on mobile and tablet</del>
                            </li>
                            <li>
                                <del>watch on laptop and tv</del>
                            </li>
                            <li>
                                <del>HD available</del>
                            </li>
                            <li>
                                <del>ultra HD available</del>
                            </li>
                        </ul>
                        <div class="gen-btn-container button-1">
                            <a href="#" class="gen-button">
                                <span class="text">Purchase now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mt-3 mt-md-0">
                    <div class="gen-price-block text-center">
                        <div class="gen-price-detail">
                            <span class="gen-price-title"> Premium </span>
                            <h2 class="price">$ 199.00</h2>
                            <p class="gen-price-duration">/ Per Month</p>
                            <div class="gen-bg-effect">
                                <img src="images/asset-54.jpg" alt="architek-image">
                            </div>
                        </div>
                        <ul class="gen-list-info">
                            <li>
                                Number Of Screen
                            </li>
                            <li>
                                On how many device you can Download
                            </li>
                            <li>
                                Unlimited TV shows and movies
                            </li>
                            <li>
                                <del>watch on mobile and tablet</del>
                            </li>
                            <li>
                                <del>watch on laptop and tv</del>
                            </li>
                            <li>
                                <del>HD available</del>
                            </li>
                            <li>
                                <del>ultra HD available</del>
                            </li>
                        </ul>
                        <div class="gen-btn-container button-1">
                            <a href="#" class="gen-button">
                                <span class="text">Purchase now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Plan End -->

@include('layouts.footer')
@endsection