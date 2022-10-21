@extends('layouts.app-frontend')
@section('title', 'Group Booking')
@section('web_content')
    <section class="group_booking_section">
        <div class="container">
            <div class="form_container">
                <div class="contact-form">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <h4 class="text-center">Group Booking Form</h4>
                    <form action="{{ route('group_booking_store') }}" method="POST">
                        @csrf
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" name="name" placeholder="Your Name"
                                    autocomplete="off" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input required type="text" class="form-control p-4" placeholder="Contact Number"
                                    name="contact_number" data-validation-required-message="Contact number is require."
                                    autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" name="email"
                                    placeholder="Please enter your email "autocomplete="off" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input required type="text" name="num_adult" class="form-control p-4"
                                    placeholder="Number of adults" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input required type="text" class="form-control p-4"
                                    placeholder="Number of childs (02-05 Years)" name="num_child_2_5_year"
                                    autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input required type="text" class="form-control p-4"
                                    placeholder="Number of childs (05-10 Years)" name="num_child_5_10_year"
                                    autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input required type="text" class="form-control p-4" name="page" placeholder="Page"
                                    name="page" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input required type="text" class="form-control p-4" name="org_name"
                                    placeholder="Organization Name " name="org_name" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <input required type="text" class="form-control p-4" placeholder="How Many people"
                                    required="required" name="how_many_people" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group" style="position: relative;">
                                <input required type="date" class="form-control p-4" name="date"
                                    data-validation-required-message="Date field is require." autocomplete="off" />
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
