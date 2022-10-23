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
                    <div>
                        <div class="section-title_ text-left_">
                            <h2 class="section-title__title">Magnificent Sundarban</h2>
                        </div>
                        <div>
                            <p>Khulna – Harbaria – Katka – Kochikhali – Koromjal - Khulna</p>
                            <p>3 Days/ 2 Nights</p>
                            <p>Price starts from BDT 11,000 per person</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="section-title_ text-left_">
                            <h2 class="section_heading">Sundarban Tour Itinerary</h2>
                            <h2 class="section-title__title">Day – 1: Khulna – Harbaria – Kochikhali</h2>
                        </div>
                        <ul>
                            <li>Our guide will meet you at Khulna Jahaj Ghat at 7:00am, transfer you to our boat and
                                start
                                immediately toward Sundarban. Breakfast will be served on the ship.</li>
                            <li>Reach Harbaria Eco Tourism center in the late afternoon. Hiking in the Harbaria forest
                                area to see
                                wild life and forest and have the first experience of Sundarban Mangrove Forest.</li>
                            <li>Back to the boat and immediately boat will start cruising for Kochikhali. Reach
                                Kochikhali at night and
                                overnight stay on the ship. Lunch and dinner will be served on the ship.</li>
                        </ul>
                    </div>
                    <div class="wrapper">
                        <div class="section-title_ text-left_">
                            <h2 class="section-title__title">Day – 2: Kochikhali – Kotka</h2>
                        </div>
                        <ul>
                            <li>Early in the morning we shall offer trip through small creeks and canals by country boat
                                to see the
                                wildlife and feel the forest from very close. After cannel cruise we will hike in the
                                Kochikhali forest
                                area to see wildlife Sanctuary, where you will encounter a lot of wildlife.
                                immediately toward Sundarban. Breakfast will be served on the ship.</li>
                            <li>Back to the ship and have breakfast.</li>
                            <li>After breakfast we will visit Dimerchor sea beach. We will offer some event at sea
                                beach.</li>
                            <li>Return to the ship and start for Kotka. We will go through a small river where you will
                                be able to feel
                                Sundarban from a close distance. Lunch will be served on the way.</li>
                            <li>Reach Kotka in the afternoon, around 3.00pm we visit Kotka Tiger hill and hike in the
                                jungle for some
                                time. After visit tiger hill we will go for Jamtola watch tower.</li>
                            <li>Start our return journey toward Chadpai forest station in the evening. Overnight stay on
                                the ship near
                                the forest station.</li>
                        </ul>
                    </div>
                    <div class="wrapper">
                        <div class="section-title_ text-left_">
                            <h2 class="section-title__title">Day – 3: Kotka - Koromjol – Khulna</h2>
                        </div>
                        <ul>
                            <li>Early in the morning, go for a ride on a noiseless wooden boat, and explore the creeks
                                and canals of
                                Sundarban searching for wildlife and many different birds.</li>
                            <li>Back to the ship, have breakfast and start for Koromjol Crocodile breeding Center.</li>
                            <li>Reach Koromjol crocodile breeding Center around 10:00am. Walk on the trail inside
                                Koromjol, watch
                                the Sundarban Mangrove Forest from the watch tower, and visit the Crocodile Breeding
                                Center.</li>
                            <li>Return to the ship and start for Khulna. Lunch will be served on the way.</li>
                            <li>Reach Khulna around 4:00pm. Have evening snacks with tea/coffee.</li>
                            <li>Disembark from the ship.</li>
                            <li>End of the tour</li>
                        </ul>
                    </div>
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
            <div>
                <h4>Price for Foreigners</h4>
                <p>7,500 Tk per person forest permit fee will be added with the above-mentioned price.</p>
            </div>
            <div>
                <h4>Sundarban Tour Includes</h4>
                <ul>
                    <li>Accommodation on the ship cabins</li>
                    <li>All meals during the tour as per the itinerary</li>
                    <li>Mineral drinking water</li>
                    <li>Bar-B-Q dinner on the second night</li>
                    <li>Forest permit fee</li>
                    <li>Boat trips on the canal with a noiseless wooden boat</li>
                    <li>Armed forest guards from the forest department for safety</li>
                </ul>
            </div>
            <div>
                <h4>Sundarban Tour Excludes</h4>
                <ul>
                    <li>Bus, train or any other transportation to Khulna</li>
                    <li>Drink both hard and soft</li>
                    <li>Any personal expenses</li>
                    <li>Forest fees for the video & still cameras of the guest.</li>
                </ul>
            </div>
            <div>
                <h4><strong>Terms & Conditions</strong></h4>
                <h4>Things to Carry:</h4>
                <ol>
                    <li>Windbreaker / raincoat / umbrella</li>
                    <li>Snicker shoes for walking</li>
                    <li> Hat / Cap for Sun protection</li>
                    <li>Binoculars</li>
                    <li>Camera & films</li>
                    <li>Toothpaste & tooth brush</li>
                    <li>Towels</li>
                    <li>Bath soap</li>
                    <li>emergency medicines</li>
                    <li>Flash light</li>
                    <li>A pair of sharp eyes to locate interesting objects</li>
                </ol>
            </div>
            <div>
                <h4>How to Book:</h4>
                <ul>
                    <li>Fill-up the booking form and submit to start the booking process</li>
                    <li>After that, pay 50% of the total tour price as a deposit. You can send the payment directly to our
                        Bank account or pay physically by coming to our office</li>
                    <h4>Bank Detail:</h4>
                    <li> Bank Name# Premier Bank</li>
                    <li>Branch# Banani, Dhaka</li>
                    <li>Account Name# Sea Pearl Beach Resort & Spa Ltd. Cruise 03</li>
                    <li>Account Number# 104-131-0000-3009</li>
                    <li>Booking will be confirmed only after getting a 50% deposit, the rest of the payment has to be paid
                        15 daysbefore the tour.</li>
                    <li>Booking will be automatically canceled if the tour’s full price is not paid 15 days before the tour.
                    </li>
                    <li>We’ll also need a copy of the National ID or valid passport of everyone for the forest permit, and
                        the children’s birth certificate as proof of age.</li>
                    <li><strong>A minimum of 30 people are required to run the voyage. However, the authority may change
                            anything with/without prior notice.</strong></li>
                </ul>
            </div>
            <div>
                <h4>Cancellation Policy:</h4>
                <p>If you want to cancel any confirmed booking, you need to do that by replying to the booking email of the
                    tour. No
                    cancellation will be accepted without a written email. The time of receiving the email will be
                    considered as the
                    time of cancellation.</p>
            </div>
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
