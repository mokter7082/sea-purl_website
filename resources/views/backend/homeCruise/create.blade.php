@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Slider</a></li>
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
                        action="{{ route('home-cruise.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Add New Feature</h3>
                        <div class="form-group">
                            <label for="title">Title (optional)</label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Title (optional)">
                        </div>
                        <div class="form-group">
                            <label for="textareaMaxLength" class="control-label">Description</label>
                            <textarea class="form-control" name="description" rows="3" id="textareaMaxLength"
                                placeholder="Write Description  (optional)"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="title">Images</label>
                            <input type="file" name="image" class="form-control" id="title" required>
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
