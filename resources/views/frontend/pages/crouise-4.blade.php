@extends('layouts.app-frontend')
@section('title', 'Cruise-4')
@section('web_content')
    <div>
        <img class="w-100" src="{{ asset('public/frontend/img/Cruise-4_.webp') }}" alt="">
    </div>
    <section>
        <div class="container">
            <div class=" pt-3">
                <h2 class="text-center"><strong>Sea Pearl Cruise-4</strong></h2>
                <div class="section-title_ text-left_ ">
                    <h2 class="text-center">The cruiser vessel M.V. Sea Pearl 4 is a four-decked vessel</h2>
                </div>
            </div>
            @foreach ($cruise4 as $data)
                <div class="wrapper content_wrapper pb-3">
                    <div class="section-title_ text-left_">
                        <h2 class="section-title__title">{{ $data->title ?? '' }}</h2>
                    </div>
                    <div class="content_wrapper">{!! $data->content ?? '' !!}</div>
                </div>
            @endforeach
        </div>
    </section>
    <div class="container-fluid pt-5">

        <div class="container">
            <h3 class="text-center"><strong>RESERVATION:01886553333</strong></h3>
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100 gallery_img"
                                src="https://images.unsplash.com/photo-1437385545573-fcf5b4b7fb57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fHNoaXAlMjBiYW5uZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100 gallery_img"
                                src="https://images.unsplash.com/photo-1477842118926-177c05d856b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNoaXAlMjBiYW5uZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <img class="img-fluid w-100 gallery_img"
                                src="https://images.unsplash.com/photo-1518291920814-7c4e747d17db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fHNoaXAlMjBiYW5uZXJ8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
