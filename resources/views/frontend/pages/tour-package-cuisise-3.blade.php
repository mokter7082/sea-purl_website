@extends('layouts.app-frontend')
@section('title', 'Tour Package Cruise-3')
@section('web_content')
    <!-- Page Header Start -->
    <div class="pb-4 ">

        <img class="w-100" src="{{ asset('public/frontend/img/itinary-cruie-3.webp') }}" alt="">

    </div>
    <!-- Page Header End -->
    <section>
        <div class="container pt-4">
            <div class="col-xl-12">
                <div class="about-two__right">
                    @foreach ($tourPackageCruise3Content as $data)
                        <div class="wrapper pb-3">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title">{{ $data->title ?? '' }}</h2>
                            </div>
                            <div class="content_wrapper">{!! $data->content ?? '' !!}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="downlod_pdf">
        <a href="{{ route('download-pdf') }}" class="btn btn-primary text-center">Download Food Menu</a>
    </div>




@endsection
