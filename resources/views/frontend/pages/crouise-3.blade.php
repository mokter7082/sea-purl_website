@extends('layouts.app-frontend')
@section('title', 'Cruise-3')
@section('web_content')
    <div>
        <img class="w-100" src="{{ asset('public/frontend/img/cruise-3_.webp') }}" alt="">
    </div>
    <section>
        <div class="container">
            <div>
                <h2 class="text-center pt-3"><strong>Sea Pearl Cruise-3</strong></h2>
                <div class="section-title_ text-left_ ">
                    <h2 class="text-center pb-1">The Cruiser vessel M.V. Sea Pearl Cruise 3 is a three-decked
                        vessel</h2>
                </div>
            </div>
            @foreach ($cruise3 as $data)
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

    <section class="pt-5">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="box p- w-100" style="height: 200px">
                    <h4 class="text-center pt-2"><strong>Changable Box</strong></h4>
                    <div class="content">
                        <p class="px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut qui iure, cumque,
                            placeat ullam
                            culpa ut
                            aspernatur, expedita minima facere cupiditate! Est officiis odio veniam aperiam incidunt facilis
                            nobis amet dignissimos sunt soluta quisquam fuga, architecto temporibus tempore qui. Voluptatem?
                            Est
                            officiis odio veniam aperiam incidunt facilis
                            nobis amet dignissimos sunt soluta quisquam fuga, architecto temporibus tempore qui. Voluptatem?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
