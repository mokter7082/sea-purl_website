@extends('layouts.app-frontend')
@section('title', 'About Us')
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
                {{-- <div class="col-xl-6">
                    <div class="about-two__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-two__img">
                            <img src="{{ asset('public/frontend/assets/images/resources/about-image.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-12">
                    <div class="about-two__right">
                        <div class="sundarban_wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title">Sundarbans</h2>
                            </div>
                            <p class="about-two__text-1">A unique eco-tourism destination, the Sundarbans, is the largest
                                Mangrove Forest on earth and
                                a UNESCO World Heritage Site. It stretches about 80km into the Bangladeshi and Indian
                                mainland
                                from the coast of the Bay of Bengal. 60% of this mist-shrouded forest is located in
                                Bangladesh.
                                Though this 10,500km 2  forest area is surrounded by two of the most densely populated
                                country
                                on
                                three sides, it remains remote, inhospitable, and largely uninhabited by people. Intersected
                                by
                                a
                                complex network of rivers and creeks, mudflats, and tiny islands, this amazing forest is
                                comprised of
                                two elementary Eco regions: The Mangrove Forest and the Freshwater Swamp Forest. The
                                Mangrove
                                Forest and the Freshwater Swamp Forest.   The word Sundarbans means a beautiful forest.
                                However, the name is derived from the “Sundari” trees which are seen here plentifully. This
                                forest is
                                mainly famous for the Royal Bengal Tiger but you’ll also see here the spotted deer,
                                saltwater
                                crocodiles, and different types of birds. This huge forest provides a habitat for 42 species
                                of
                                mammal,
                                290 species of bird, 120 species of fish, 50 species of reptiles, and 8 species of
                                amphibians.
                            </p>
                        </div>
                        <div class="sundarban_wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title pt-3">Katka</h2>
                            </div>
                            <p class="about-two__text-1">Located on the southeast corner of the Sundarbans, this place is
                                one of the most tourists
                                visited place. Tourists come here to see tigers, spotted deer and different types of birds.
                                You can
                                easily see the wildlife of Sundarbans from the 40 feet high wooden watchtower.
                            </p>
                        </div>
                        <div class="sundarban_wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title pt-3">Kochikhali</h2>
                            </div>
                            <p class="about-two__text-1">Located 14km to the east of Katka, Kochikhali features dense
                                forests facing the Bay of Bengal.
                                Boating along the Kochikhali Khal will provide you the glimpse of basking crocodiles, deer,
                                wild boar,
                                lizards and a lot of birds. Even, sometimes you can see the famous Royal Bengal Tiger.
                            </p>
                        </div>
                        <div class="sundarban_wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title  pt-3">Hiron Point</h2>
                            </div>
                            <p class="about-two__text-1">Headquarter of the South Wildlife Sanctuary, Hiron Point, is one of
                                the most visited places in
                                Sundarbans. Tourists come to this graceful spot to see tigers and other rare and spectacular
                                wildlife
                                such as monkey, crocodiles, otter, snakes etc. Also known as Nilkamal, this place is also
                                famous for
                                different types of birds.
                            </p>
                        </div>
                        <div class="sundarban_wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title  pt-3">Jamtola Beach</h2>
                            </div>
                            <p class="about-two__text-1">Though this beach is not a famous one, this lonesome beach is a
                                nice and clean beach
                                in Bangladesh. For its remote location, deep in the Sundarbans beside the Bay of Bengal not
                                many
                                people come here. But if you come here and spend some time on this serene beach, it will be
                                an
                                unforgettable experience in your life.
                            </p>
                        </div>
                        <div class="sundarban_wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title  pt-3">Dublar Char</h2>
                            </div>
                            <p class="about-two__text-1">This beautiful Sundarbans tourist attraction island is well-known
                                for its picturesque scenarios and
                                fishing and dry fish processing activities. Located to the southwest of Katka and southeast
                                of Hiron
                                Point, Dublar Char is famous for the three days long Rush Mela. Then Thousands oe here to
                                join this
                                festival from different parts of the country.
                            </p>
                        </div>
                        <div class="sundarban_wrapper">
                            <div class="section-title_ text-left_">
                                <h2 class="section-title__title  pt-3">Karamjol</h2>
                            </div>
                            <p class="about-two__text-1">This magnificent visiting place in Sundarbans serves as a deer
                                breeding and wildlife rearing center.
                                To see different precious and rare species of wildlife thousands of tourists make their way
                                to
                                Karamjol, a ranger station deep in the forest.
                            </p>
                        </div>

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
