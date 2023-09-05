@extends('layouts.main')
@section('title', 'Latest News')
@section('content')
    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/page-title-bg.png') }}); margin-top: 1px">
        <div class="auto-container">
            <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
                <h1 class="title">Latest News</h1>
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>Latest News</li>
                </ul>
            </div>
        </div>
    </section>



    <section class="news-section" style="padding: 50px 0 90px;">
        <div class="auto-container">
            <div class="row">

                <div class="sec-title text-center">
                    <span class="sub-title">Our News</span>
                    <h2>Latest News</h2>
                </div>

                @foreach ($news as $new)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('news.show', $new->id) }}">
                                        <img src="{{ $new->photo ?? '' }}" alt=""
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </a>
                                </figure>
                                <span class="date" style="width: 200px; height: 50px; bottom: -1px;">
                                    {{ $new->submit_date ?? '' }}
                                </span>
                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li>
                                        <i class="fa fa-folder"></i>
                                        Business
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        Million Myanmar Co.,Ltd
                                    </li>
                                </ul>
                                <h4 class="title">
                                    <a href="">
                                        {{ $new->title ?? '' }}
                                    </a>
                                </h4>
                                <div class="text">
                                    {!! Str::substr($new->description, 0, 100) !!}
                                </div>
                                <a href="{{ route('news.show', $new->id) }}" class="theme-btn btn-style-two">
                                    <span class="btn-title">
                                        Read More
                                        <i class="fa fa-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
