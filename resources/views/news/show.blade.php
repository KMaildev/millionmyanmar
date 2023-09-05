@extends('layouts.main')
@section('title', $new_details->title)
@section('content')
    <section class="page-title"
        style="background-image: url({{ asset('assets/images/background/page-title-bg.png') }}); margin-top: 1px">
        <div class="auto-container">
            <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
                <h1 class="title">
                    {!! $new_details->title ?? '' !!}
                </h1>
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

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">

                        <div class="blog-details__img">
                            <img src="{{ $new_details->photo ?? '' }}" alt=""
                                style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li>
                                    <a href="javascript::void(0)">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        {{ $new_details->submit_date ?? '' }}
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript::void(0)">
                                        <i class="fas fa-comments"></i>
                                        Million Myanmar Co.,Ltd
                                    </a>
                                </li>
                            </ul>

                            <h3 class="blog-details__title">
                                {!! $new_details->title ?? '' !!}
                            </h3>
                            <p class="blog-details__text-2" style="text-align: justify">
                                {!! $new_details->description ?? '' !!}
                            </p>
                        </div>

                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <a href="javascript::void(0)">
                                    Share on your social media
                                </a>
                            </p>

                            <div class="blog-details__social-list">
                                <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                    target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Latest Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($news as $new)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ $new->photo ?? '' }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta">
                                                    <i class="fas fa-user-circle"></i>
                                                    Million Myanmar
                                                </span>

                                                <a href="{{ route('news.show', $new->id) }}">
                                                    {{ $new->title ?? '' }}
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        @include('components.contact_card')

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
