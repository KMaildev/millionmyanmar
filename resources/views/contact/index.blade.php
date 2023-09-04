@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/page-title-bg.png') }}); margin-top: 1px">
        <div class="auto-container">
            <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
                <h1 class="title">Contact Us</h1>
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="sec-title">
                        <span class="sub-title">
                            Contact Us
                        </span>
                        <h2 class="font-design1">
                            How Can We Help You!
                        </h2>
                        <p style="color: black;">
                            Please enter the following items and click the "To confirmation screen" button. *This field is
                            required.
                        </p>
                    </div>

                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}" autocomplete="off">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <textarea name="message" class="form-control" rows="2" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait...">
                                    <span class="btn-title">Send message</span>
                                </button>
                                <button type="reset" class="theme-btn btn-style-one bg-theme-color5">
                                    <span class="btn-title">Reset</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">
                                Interested in discussing?
                            </span>
                            <h2>
                                Information
                            </h2>
                            <div class="text">
                                Alternatively, you may contact us by filling up the contact form. Our team will response you
                                shortly.
                            </div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-phone-plus"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question?</h6>
                                    <a href="tel:980089850">
                                        <span>Free</span> +92 (020)-9850
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-envelope1"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:info@millionmyanmar.com">
                                        info@millionmyanmar.com
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="lnr-icon-location"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span>
                                        Yangon, Myanmar
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->

    <section class="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.0926097071865!2d96.16047747418764!3d16.77206748401393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec7d4c3f4dcd%3A0x25aa9c6da1ef1548!2sGolden%20Sea%20Myanmar%20Company%20Limited!5e0!3m2!1sen!2smm!4v1693846906094!5m2!1sen!2smm"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection
