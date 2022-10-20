@extends('layouts.app-frontend')
@section('title', 'Group Booking')
@section('web_content')
    <section class="group_booking_section">
        <div class="container">
            <div class="form_container">
                <div class="contact-form">
                    <div id="success"></div>
                    <h4 class="text-center">Group Booking Form</h4>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name"
                                    autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="contact_number"
                                    placeholder="Contact Number" required="required"
                                    data-validation-required-message="Please enter your Organization" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="email"
                                    placeholder="Please enter your email " required="required"
                                    data-validation-required-message="Please enter your email " autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="num_adult" placeholder="Number of adults"
                                    required="required" data-validation-required-message="Number of adults"
                                    autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="email"
                                    placeholder="Number of childs (02-05 Years)" required="required"
                                    data-validation-required-message="Please enter your email " autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="Number of childs (05-10 Years) "
                                    placeholder="Number of childs (05-10 Years) " required="required"
                                    data-validation-required-message="Number of childs (05-10 Years) " autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="Page" placeholder="Page"
                                    required="required" data-validation-required-message="Page" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="mobile"
                                    placeholder="Organization Name " required="required"
                                    data-validation-required-message="Please enter your mobile" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="Page" placeholder="How Many people"
                                    required="required" data-validation-required-message="Page" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group" style="position: relative;">
                                <input type="date" class="form-control p-4" id="mobile"
                                    placeholder="Organization Name " required="required"
                                    data-validation-required-message="Please enter your mobile" autocomplete="off" />
                                <p class="date_label">Tour date</p>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
