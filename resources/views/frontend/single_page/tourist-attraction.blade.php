@extends('layouts.app-frontend')
@section('title', 'Details')
@section('web_content')

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="">
                        <h1 class=" mb-3">{{ $singleData->title ?? '' }}</h1>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid rounded w-100 mb-4"
                            src="{{ url('public/content_img/tourist_attrations/' . $singleData->image ?? '') }}"
                            alt="Image">
                        <p>{!! $singleData->content ?? '' !!}</p>


                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Detail End -->



@endsection
