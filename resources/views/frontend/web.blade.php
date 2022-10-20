@extends('layouts.app-frontend')
@section('web_content')
    <!-- Carousel Start -->

    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($sliders as $key => $slider)
                    <li data-target="#header-carousel" data-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach

            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="img-fluid" src="{{ asset('public/slider/' . $slider->image ?? '') }}" alt="Image"
                            style="width: 100%; height:100%">
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 video_thumnail">
                    <img src="{{ asset('public/video_thumnail/' . $video->thum_image ?? '') }}" alt="">
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Explore</h6>
                    <h1 class="mb-4 section-title">{{ $video->title ?? 'Explore Cruises' }}</h1>
                    <p>{{ $video->description ?? 'Explore Cruises' }} <a href="">Read more</a></p>
                    <div class="d-flex align-items-center pt-4">
                        {{-- <a href="" class="btn btn-primary mr-5">Learn More</a> --}}
                        <button type="button" class="btn-play text-center" data-toggle="modal"
                            data-src="{{ $video->youtube_link ?? '' }}" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        {{-- <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/watch?v=PNDZQ7NojEg&list=PL_XxuZqN0xVDHFj-ecFSU0SU-B0TuJRk9"
                            id="video" allowscriptaccess="always" allow="autoplay"></iframe> --}}
                        <iframe width="420" height="345" src="https://www.youtube.com/embed/YMNxMBjseG8">
                        </iframe>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    {{-- <div class="container-fluid bg-service py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Our Services</h6>
                <h1 class="mb-4 section-title text-white">Awesome Cleaning Services For You</h1>
                <p class="text-white">Invidunt lorem justo clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed
                    eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">More Services</a>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <div class="owl-carousel service-carousel position-relative">
                    <div
                        class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa fa-2x fa-hotel"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Home Cleaning</h5>
                        <img src="img/blog-1.jpg" alt="">
                    </div>
                    <div
                        class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa fa-2x fa-city"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Window Cleaning</h5>
                        <img src="img/blog-3.jpg" alt="">
                    </div>
                    <div
                        class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                        <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                            <i class="fa fa-2x fa-spa"></i>
                        </div>
                        <h5 class="font-weight-bold mb-4 px-4">Carpet Cleaning</h5>
                        <img src="img/blog-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- Services End -->





    <!-- Portfolio Start -->
    <div class="container">
        <h1 class="mb-4 section-title"><a href="{{ URL::to('gallery') }}" style="color: #0a1026">Gallery</a></h1>
    </div>
    <div class="container-fluid bg-portfolio py-5">

        <div class="container py-5">

            <div class="row m-0 portfolio-container">

                @foreach ($galleries as $key => $gallery)
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                        <div class="position-relative overflow-hidden">
                            <div class="portfolio-img">
                                <img class="img-fluid w-100 gallery_img"
                                    src="{{ url('public/galleries/' . $gallery->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    {{-- <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Meet Our Team</h6>
                <h1 class="section-title mb-3">Meet Our Highly Experienced Cleaners</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita
                    sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel team-carousel position-relative">
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            </div>
                            <div
                                class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            </div>
                            <div
                                class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            </div>
                            <div
                                class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            </div>
                            <div
                                class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-fluid bg-testimonial py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 pt-lg-5 pb-5">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Testimonial</h6>
                <h1 class="section-title text-white mb-5">What Our Clients Say</h1>
                <div class="owl-carousel testimonial-carousel position-relative">
                    <div class="d-flex flex-column text-white">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                            <div class="ml-3">
                                <h5 class="text-primary">Client Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                        <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores
                            vero no. Ipsum elitr elitr stet dolor lorem erat. Diam no amet sea justo vero ut. Dolor
                            ipsum kasd ipsum dolore.</p>
                    </div>
                    <div class="d-flex flex-column text-white">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                            <div class="ml-3">
                                <h5 class="text-primary">Client Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                        <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores
                            vero no. Ipsum elitr elitr stet dolor lorem erat. Diam no amet sea justo vero ut. Dolor
                            ipsum kasd ipsum dolore.</p>
                    </div>
                    <div class="d-flex flex-column text-white">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                            <div class="ml-3">
                                <h5 class="text-primary">Client Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                        <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores
                            vero no. Ipsum elitr elitr stet dolor lorem erat. Diam no amet sea justo vero ut. Dolor
                            ipsum kasd ipsum dolore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100"
                        src="{{ asset('public/frontend/img/testimonial.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- Testimonial End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                <h1 class="section-title mb-3">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita
                    sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('public/frontend/img/blog-1.jpg') }}"
                        alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                    <span class="text-primary px-2">|</span>
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                </div>
                <h5 class="font-weight-medium mb-2">Rebum lorem eos ipsum diam</h5>
                <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>
                <a class="btn btn-sm btn-primary py-2" href="">Read More</a>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('public/frontend/img/blog-2.jpg') }}"
                        alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                    <span class="text-primary px-2">|</span>
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                </div>
                <h5 class="font-weight-medium mb-2">Rebum lorem eos ipsum diam</h5>
                <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>
                <a class="btn btn-sm btn-primary py-2" href="">Read More</a>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="position-relative mb-4">
                    <img class="img-fluid rounded w-100" src="{{ asset('public/frontend/img/blog-3.jpg') }}"
                        alt="">
                    <div class="blog-date">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                    <span class="text-primary px-2">|</span>
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                </div>
                <h5 class="font-weight-medium mb-2">Rebum lorem eos ipsum diam</h5>
                <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>
                <a class="btn btn-sm btn-primary py-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div> --}}
    <!-- Blog End -->
@endsection
