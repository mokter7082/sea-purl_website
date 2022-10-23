@extends('layouts.app-frontend')
@section('title', 'About Us')
@section('web_content')
    <!-- Page Header Start -->
    <div class="pb-4 ">

        <img class="w-100" src="{{ asset('public/frontend/img/about us__.webp') }}" alt="">

    </div>
    <!-- Page Header End -->
    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-two__right">
                        @foreach ($aboutData as $data)
                            <div class="about_content_wrapper pb-4">
                                <h2 class="section-title__title">{{ $data->title ?? '' }}</h2>
                                <div>
                                    <p class="about-two__text-1">{!! $data->content ?? '' !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->
@endsection
