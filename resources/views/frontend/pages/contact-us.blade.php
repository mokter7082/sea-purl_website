@extends('layouts.app-frontend')
@section('title', 'Contact Us')
@section('web_content')
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="height: 220px">
                        <div class="card-header">
                            Dhaka Office
                        </div>
                        <div class="card-body">
                            <p>Advanced Noorani Tower (Floor-13), 1 Mohakhali C/A</p>
                            <p>Dhaka - 1211, Bangladesh.</p>
                            <p> +88 02 222246796</p>
                            <p> +8801844016001</p>
                            <p> +88 02 9140616</p>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="height: 220px">
                        <div class="card-header">
                            khulna Office
                        </div>
                        <div class="card-body">
                            <p>Batiaghata</p>
                            <p>Khulna, Bangladesh</p>
                            <p>01844016001</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>
        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row align-items-end mb-4">
                    <div class="col-lg-8 m-auto">
                        <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Contact Us</h6>
                        <h1 class="section-title"> Do you have any query?</h1>
                    </div>
                    {{-- <div class="col-lg-6">
                        <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea
                            clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row pb-4">
                                    <div class="col-sm-6 control-group">
                                        <input type="text" class="form-control p-4" id="name"
                                            placeholder="Your Name" required="required"
                                            data-validation-required-message="Please enter your name" autocomplete="off" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-sm-6 control-group">
                                        <input type="email" class="form-control p-4" id="email"
                                            placeholder="Your Email" required="required"
                                            data-validation-required-message="Please enter your email" autocomplete="off" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row pb-4">
                                    <div class="col-sm-6 control-group">
                                        <input type="text" class="form-control p-4" id="name"
                                            placeholder="Write Your Country Name" required="required"
                                            data-validation-required-message="Please enter your name" autocomplete="off" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-sm-6 control-group">
                                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                            required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group pb-4">
                                    <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3 px-5" type="submit"
                                        id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5" style="min-height: 400px;">
                        <div class="position-relative h-100 rounded overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.050943474474!2d90.39744691484636!3d23.7812001845743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c754680215c3%3A0xcb6c1ace7fafac6b!2sAdvanced%20Noorani%20Tower!5e0!3m2!1sen!2sbd!4v1664953933309!5m2!1sen!2sbd"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </section>



@endsection
