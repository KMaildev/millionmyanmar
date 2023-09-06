@extends('layouts.main')
@section('title', 'Corporate Profile')
@section('content')

    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/page-title-bg.png') }}); margin-top: 1px">
        <div class="auto-container">
            <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
                <h1 class="title">Corporate Profile</h1>
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>Corporate Profile</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 order-lg-2 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">
                                Million Myanmar Co.,Ltd
                            </span>
                            <h2>
                                Group of Business
                            </h2>
                            <div class="text" style="text-align: justify; color: black;">
                                "Million Myanmar Co.,Ltd: A Trailblazing Force in Innovation and Excellence
                                <br>
                                At Million Myanmar Co.,Ltd, we stand as a beacon of quality excellence, innovation, and
                                visionary leadership. With an unwavering commitment to our mission, a robust organizational
                                structure, and a culture of swift yet strategic decision-making, we navigate the business
                                landscape with agility, consistently delivering value and success.
                                <br>
                                Guiding our journey is Chairman U Aung Aung, a renowned industry luminary celebrated for her
                                remarkable business acumen and unyielding dedication to nurturing our most prized asset –
                                our talented workforce."
                            </div>
                        </div>

                        <div class="info-block-two">
                            <div class="inner">
                                <div class="icon-box">
                                    <i class="icon fa fa-file-pdf"></i>
                                </div>
                                <h4 class="title">
                                    To Read PDF File Easily
                                </h4>
                                <div class="text" style="text-align: justify; color: black;">
                                    <a href="" style="color: blue;">
                                        Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="image-column col-lg-6">
                    <div class="inner-column wow fadeInLeft">
                        <figure class=" overlay-anim wow fadeInUp">
                            <img src="{{ asset('data/profile.png') }}" alt="">
                        </figure>
                    </div>

                    <div class="info-block-two">
                        <div class="inner">
                            <div class="icon-box"><i class="icon flaticon-puzzle"></i></div>
                            <h4 class="title">
                                Our Object
                            </h4>
                            <div class="text" style="text-align: justify; color: black;">
                                "At Million Myanmar Co.,Ltd, our mission is clear: Deliver exceptional value, drive
                                innovation, and ensure sustainable growth. We prioritize talent, ethics, and social
                                responsibility while seeking operational excellence and strategic expansion to create
                                enduring value for all."
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

@endsection
