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
                    @foreach ($tourPackageContent as $data)
                        <div class="wrapper pb-3">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title">{{ $data->title ?? '' }}</h2>
                            </div>
                            <div>{!! $data->content ?? '' !!}</div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title_ text-left_">
                        <h2 class="section-title__title">Sundarban Tour Price</h2>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Cabin Type</th>
                                <th scope="col">Bed Type</th>
                                <th scope="col">No# of rooms</th>
                                <th scope="col">Per Person</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cruise3 as $cruise)
                                <tr>
                                    <td>{{ $cruise->cabin_type }}</td>
                                    <td>{{ $cruise->bed_type }}</td>
                                    <td>{{ $cruise->cabin_qty }}</td>
                                    <td>{{ $cruise->price_adult }} /=</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title_ text-left_">
                        <h2 class="section-title__title">Price for Children</h2>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Age</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0-2 Years</td>
                                <td>Free of Charges</td>
                            </tr>
                            <tr>
                                <td>3-6 Years</td>
                                <td>6,500 Tk Per Child</td>
                            </tr>
                            <tr>
                                <td>6+ to 10 Years</td>
                                <td>8,500 Tk Per Child</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>All prices are inclusive of service charge and VAT</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3">
        <div class="container">
            @foreach ($tourPackageContentFeature as $data)
                <div class="wrapper pb-3">
                    <div class="section-title_ text-left_">
                        <h2 class="section-title__title">{{ $data->title ?? '' }}</h2>
                    </div>
                    <div>{!! $data->content ?? '' !!}</div>
                </div>
            @endforeach
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">When canceled</th>
                            <th scope="col">Individual reservation</th>
                            <th scope="col">Group reservations (10+ persons)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">30 days prior</th>
                            <td>30 days prior</td>
                            <td>25% of the total amount will be charged</td>
                        </tr>
                        <tr>
                            <th scope="row">Less than 30 days or <br />more than 15 days prior</th>
                            <td>50% of the total will be charged</td>
                            <td>50% of the total will be charged</td>
                        </tr>
                        <tr>
                            <th scope="row">Less than 15 days or <br />more than 7 days prior</th>
                            <td>75% of the total will be charged</td>
                            <td>100% will be charged</td>
                        </tr>
                        <tr>
                            <th scope="row">Less than 7 days prior</th>
                            <td>100% will be charged</td>
                            <td>100% will be charged</td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <h4>Cancellation by Sea Pearl:</h4>
                    <p>If we cancel the tour because of bad weather or any national emergency, or any other unavoidable
                        circumstances, 100% of your deposit will be refunded.</p>
                </div>
            </div>
        </div>
        <div class="downlod_pdf">
            <a href="{{ route('download-pdf') }}" class="btn btn-primary text-center">Download Food Menu</a>
        </div>
    </section>



@endsection
