@include('frontend.include.header')
<!-- Header Start -->
<div class="container-fluid top_navbar">
    @include('frontend.include.navbar')
</div>
<!-- Header End -->


<div>
    @yield('web_content')
</div>


<!-- Footer Start -->
<div class="container-fluid footer_area text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="#" class="navbar-brand">
                <h4 class="font-weight-semi-bold text-primary mb-4">About Us</h4>
            </a>
            <p>Sea Pearl Cruises is a concern of Sea Pearl Beach Resort & Spa, Cox’s Bazar, and offers 02 nice cruise
                ships for Sundarban trips for family and Corporate Groups. Cruise facilities include 46-52 person
                accommodation</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Contact Us</h4>
            <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>Advanced Noorani Tower</p>
            <p class="pl-3">(Floor-13), 1 Mohakhali C/A</p>
            <p><i class="fa fa-phone-alt text-primary mr-2"></i>+8801886553333</p>

            {{-- <p><i class="fa fa-envelope text-primary mr-2"></i>info@example.com</p> --}}
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Important Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white" target="_blank" href="https://seapearlcoxsbazar.com/"><i
                        class="fa fa-angle-right mr-2"></i>Sea
                    Perl Beach Resort &
                    Spa Ltd.</a>
                <a class="text-white" target="_blank" href="https://www.facebook.com/waterparkcoxsbazar"><i
                        class="fa fa-angle-right mr-2"></i>Sea Pearl Water Park</a>
                <a class="text-white" target="_blank" href="https://lavilladhaka.com/"><i
                        class="fa fa-angle-right mr-2"></i>La Villa
                    Western
                    Dhaka</a>
                <a class="text-white" target="_blank" href=" https://www.facebook.com/seapearlsundarban/"><i
                        class="fa fa-angle-right mr-2"></i>Sea Pearl Sundarban Eco
                    Resort Ltd. </a>
                <a class="text-white" target="_blank" href="https://www.facebook.com/bvcbd/"><i
                        class="fa fa-angle-right mr-2"></i>Bengal Vacation Club Ltd.</a>
                <a class="text-white" target="_blank" href="https://beautifulbangladesh.gov.bd/"><i
                        class="fa fa-angle-right mr-2"></i>Beautiful Bangladesh</a>
                <a class="text-white" target="_blank" href="https://sundarbantourism.bforest.gov.bd/en"><i
                        class="fa fa-angle-right mr-2"></i>Sundarban Tourism</a>
                <a class="text-white" target="_blank" href="http://www.tourismboard.gov.bd/"><i
                        class="fa fa-angle-right mr-2"></i>Bangladesh
                    Tourism Board</a>
                <a class="text-white" target="_blank" href=" https://tourist.police.gov.bd/"><i
                        class="fa fa-angle-right mr-2"></i>Bangladesh
                    Tourist Police</a>
            </div>
        </div>

        <div class="col-lg-2 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Socile Media</h4>
            <div class="d-flex justify-content-start mt-4">
                <!--<a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>-->
                <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/seapearlsundarban"
                    target="_blank"><i class="fab fa-facebook-f"></i></a>
                <!--<a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>-->
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="w-100">
                <div class="">
                    <a href="{{ route('group-booking') }}" class="btn btn-primary px-4 mt-4"
                        style="font-size:14px;">Group Booking</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white border-top py-4 px-sm-3 px-md-5 bottom_footer"
    style="border-color: #3E3E4E !important;" style="background: #000000">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">Sea Pearl</a> All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="{{ URL::to('policy') }}">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="{{ URL::to('policy') }}">Terms & Conditions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="{{ URL::to('policy') }}">Refund & Return Policy</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer End -->

@include('frontend.include.footer')
