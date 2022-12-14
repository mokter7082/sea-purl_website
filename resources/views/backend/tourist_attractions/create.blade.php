@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Create Tourist Attraction</a></li>
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
                    <h3>Create Tourist Attraction Content</h3>
                    <form id="inline-validation" class="form-horizontal form-stripe"
                        action="{{ route('store_tourist_attraction') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="price_foreigner">Section Title </label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Section Title" required>
                        </div>
                        <div class="form-group">
                            <label for="textareaMaxLength" class="control-label">Content</label>
                            <textarea class="form-control" name="content" rows="3" id="textareaMaxLength" placeholder="Write Content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Images</label>
                            <input type="file" name="image" class="form-control" id="title" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Content Position</label>
                            <select name="img_position" class="form-control" id="">
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                            </select>
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

        @push('scripts')
            <script>
                $(document).ready(function() {
                    $('.ckeditor').ckeditor();
                });
            </script>
        @endpush
