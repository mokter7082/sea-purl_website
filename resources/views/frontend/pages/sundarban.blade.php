@extends('layouts.app-frontend')
@section('title', 'Sundarban')
@section('web_content')
    <!-- Page Header Start -->
    <div class='pb-4'>
        <img class="w-100" src="{{ asset('public/frontend/img/Sundarban.webp') }}" alt="">
    </div>
    <!-- Page Header End -->
    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="about-two__right">
                        @foreach ($sundarbanData as $data)
                            <div class="sundarban_content_wrapper pb-3">
                                <div class="section-title_ text-left_">
                                    <h2 class="section-title__title">{{ $data->title ?? '' }}</h2>
                                </div>
                                <p class="about-two__text-1">{!! $data->content ?? '' !!}</p>
                            </div>
                        @endforeach

                    </div>




                </div>
            </div>
        </div>
    </section>
    <section class="mt-4 px-3">
        <div class="sondarban_map">
            {{-- <img class="w-100" src="{{ asset('public/frontend/img/map.png') }}" alt="Google map"> --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d795999.4185984267!2d88.56424756191805!3d22.061520760135235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a01a130207e4b61%3A0x7be8fca54012d92c!2sSundarban%20Bangladesh%20Part!5e0!3m2!1sen!2sbd!4v1665769041256!5m2!1sen!2sbd"
                width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--About Two End-->
@endsection
