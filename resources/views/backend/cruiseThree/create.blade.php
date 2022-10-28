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
                    <h3>Add Cruise-3</h3>
                    <form id="inline-validation" class="form-horizontal form-stripe"
                        action="{{ route('cruise-three.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="price_foreigner">Section Title </label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Section Title">
                        </div>
                        <div class="form-group">
                            <label for="price_foreigner">Content </label>
                            <textarea class="ckeditor form-control" name="content"></textarea>
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
