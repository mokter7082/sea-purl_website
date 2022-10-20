@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Video</a></li>
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
                    <form id="inline-validation" class="form-horizontal form-stripe" action="{{ route('video.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Add New Video</h3>
                        <div class="form-group">
                            <label for="video">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" id="video"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="textareaMaxLength" class="control-label">Description</label>
                            <textarea class="form-control" name="description" rows="3" id="textareaMaxLength" placeholder="Write Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="video">Thumnail Image</label>
                            <input type="file" name="thum_image" class="form-control" id="video" required>
                        </div>
                        <div class="form-group">
                            <label for="video">Youtube Link</label>
                            <input type="text" name="youtube_link" class="form-control" placeholder="URL" id="video"
                                required>
                        </div>
                        <div class="form-group" style="width: 50%">
                            <label for="link">Status</label>
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
