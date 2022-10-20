@extends('layouts.app-frontend')
@section('title', 'Gallery')
@section('web_content')
    <!-- Portfolio Start -->
    <section class="">
        <div class="container">
            <div class=" pt-5">
                <h1 class="section-title">Cruise-3 Gallery</h1>
            </div>
        </div>
        <div class="container-fluid bg-portfol">
            <div class="container py-3">
                <div class="row m-0 portfolio-container">
                    @foreach ($cruise3_galley as $key => $galleryC3)
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100 gallery_img"
                                        src="{{ url('public/galleries/' . $galleryC3->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio End -->
    </section>
    <section class="">
        <div class="container">
            <div class=" pt-5">
                <h1 class="section-title">Cruise-4 Gallery</h1>
            </div>
        </div>
        <div class="container-fluid bg-portfol">
            <div class="container py-3">
                <div class="row m-0 portfolio-container">
                    @foreach ($cruise4_galley as $key => $galleryC3)
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100 gallery_img"
                                        src="{{ url('public/galleries/' . $galleryC3->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
        <!-- Portfolio End -->
    </section>
@endsection
