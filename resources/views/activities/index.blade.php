@extends('layouts.main')
@section('title', 'Gallery & Activities')
@section('content')

    <section class="subscribe-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-lg-2">

                    <div class="inner-column wow fadeInRight">
                        <div class="sec-title light">
                            <span class="sub-title">Gallery & Activities</span>
                            <h2>
                                Checkout our gallery
                            </h2>
                            <div class="text" style="text-align: justify; font-size: 18px;">
                                "Welcome to our gallery and activities! We invite you to explore a world of creativity,
                                inspiration, and engagement through our carefully curated collection of exhibits and
                                interactive experiences."
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow zoomIn">
                                <img src="{{ asset('assets/images/resource/pana.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-products">
        <div class="auto-container">
            <div class="mixitup-gallery">
                <div class="filters clearfix">
                    @foreach ($categories as $category)
                        <a href="{{ route('activities.index') }}?category={{ $category->id }}" class="button-85" role="button">
                            {{ $category->title ?? '' }}
                        </a>
                    @endforeach
                </div>

                <div class="filter-list row">
                    <!--Product Block-->
                    <div class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image"><a href="shop-product-details.html"><img
                                        src="images/resource/products/1.jpg" alt="" /></a></div>
                            <div class="content">
                                <h4><a href="shop-product-details.html">Show Piece</a></h4>
                                <span class="price">$32.00</span>
                                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                            </div>
                            <div class="icon-box">
                                <a href="shop-product-details.html" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                                <a href="shop-cart.html" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
