@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>cruises</a></li>
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
                    <form id="inline-validation" class="form-horizontal form-stripe"
                        action="{{ route('cruise-four.update', $cruises->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3>Edit Cruises</h3>
                        <div class="form-group">
                            <label for="cabin_type">Cabin Type</label>
                            <input type="text" name="cabin_type" class="form-control" id="cabin_type"
                                value="{{ $cruises->cabin_type ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="bed_type">Bed Type</label>
                            <input type="text" name="bed_type" class="form-control" id="bed_type"
                                value="{{ $cruises->bed_type ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="cabin_qty">Cabin Quantity </label>
                            <input type="number" name="cabin_qty" class="form-control" id="cabin_qty"
                                value="{{ $cruises->cabin_qty ?? '' }}" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="image">Images</label>
                            <input type="file" name="image" class="form-control" id="image" required>
                        </div> --}}
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
