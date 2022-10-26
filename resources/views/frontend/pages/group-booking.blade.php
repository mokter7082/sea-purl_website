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
                    <h4 class="text-center pb-3">Group Booking Form</h4>
                    <form action="{{ route('group_booking_store') }}" method="POST">
                        @csrf
                        <div class="form-row pb-4">

                            <div class="col-sm-6 control-group">
                                <label class="pl-3" for="">Your Name</label><br />
                                <input type="text" class="form-control p-4" name="name" placeholder="Your Name"
                                    autocomplete="off" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <label class="pl-3" for="">Contact Number</label><br />
                                <input required type="text" class="form-control p-4" placeholder="Contact Number"
                                    name="contact_number" autocomplete="off" required />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <label class="pl-3" for="">Email</label><br />
                                <input type="text" class="form-control p-4" name="email"
                                    placeholder="Please enter your email "autocomplete="off" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <label class="pl-3" for="">Page</label><br />
                                <input type="text" name="page" class="form-control p-4" placeholder="Page"
                                    autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-4 control-group">
                                <label class="pl-3" for="">Number of adults</label><br />
                                <input type="text" name="num_adult" class="form-control p-4"
                                    placeholder="Number of adults" autocomplete="off" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-4 control-group ">
                                <label class="pl-3" for="">Number of childs</label><br />
                                <select class="w-100 custom_select pl-3" name="num_child_2_5_year" id="" required>
                                    <option style="color: #777777;">Select number of childs(2-5) Years</option>
                                    <option value="2 Years">2 Years</option>
                                    <option value="3 Years">3 Years</option>
                                    <option value="4 Years">4 Years</option>
                                    <option value="5 Years">5 Years</option>
                                </select>
                            </div>
                            <div class="col-sm-4 control-group ">
                                <label class="pl-3" for="">Number of childs</label><br />
                                <select class="w-100 custom_select pl-3" name="num_child_5_10_year" id="" required>
                                    <option>Select number of childs(5-10) Years</option>
                                    <option value="5 Years">5 Years</option>
                                    <option value="6 Years">6 Years</option>
                                    <option value="7 Years">7 Years</option>
                                    <option value="8 Years">8 Years</option>
                                    <option value="9 Years">8 Years</option>
                                    <option value="10 Years">10 Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group">
                                <label class="pl-3" for="">Organization name</label><br />
                                <input type="text" class="form-control p-4" name="org_name"
                                    placeholder="Organization Name " name="org_name" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <label class="pl-3" for="">Organization name</label><br />
                                <input required type="text" class="form-control p-4" placeholder="How Many people"
                                    name="how_many_people" autocomplete="off" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="form-row pb-4">
                            <div class="col-sm-6 control-group" style="position: relative;">
                                <label class="pl-3" for="">Start date</label><br />
                                <input required type="date" class="form-control p-4" name="start_date" />

                            </div>
                            <div class="col-sm-6 control-group" style="position: relative;">
                                <label class="pl-3" for="">End date</label><br />
                                <input required type="date" class="form-control p-4" name="end_date"
                                    data-validation-required-message="Date field is require." autocomplete="off" />
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
