@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Cruise Three</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-lg-9">
                <div class="form-area">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <h3>Add Cruise</h3>
                    <form id="inline-validation" class="form-horizontal form-stripe"
                        action="{{ route('cruise-three.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="cabin_type">Cabin Type</label>
                            <input type="text" name="cabin_type" class="form-control" id="cabin_type"
                                placeholder="Cabin Type" required>
                        </div>
                        <div class="form-group">
                            <label for="bed_type">Bed Type</label>
                            <input type="text" name="bed_type" class="form-control" id="bed_type" placeholder="Bed Type"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="cabin_qty">Cabin Quantity </label>
                            <input type="number" name="cabin_qty" class="form-control" id="cabin_qty"
                                placeholder="Cabin Quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="price_children">Price for children </label>
                            <input type="number" name="price_children" class="form-control" id="price_children"
                                placeholder="Price for children" required>
                        </div>
                        <div class="form-group">
                            <label for="price_adult">Price for adult </label>
                            <input type="number" name="price_adult" class="form-control" id="price_adult"
                                placeholder="Price for adult" required>
                        </div>
                        <div class="form-group">
                            <label for="price_foreigner">Price for foreigner </label>
                            <input type="number" name="price_foreigner" class="form-control" id="price_foreigner"
                                placeholder="Cabin Quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Images</label>
                            <input type="file" name="image" class="form-control" id="image" required>
                        </div>
                        <div class="form-group" style="width: 50%">
                            <select name="status" class="form-control" id="">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        </div>
    @endsection
