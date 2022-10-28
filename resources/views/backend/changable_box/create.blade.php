@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Create Content</a></li>
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
                    <h3>Create changle</h3>
                    <form id="inline-validation" class="form-horizontal form-stripe"
                        action="{{ route('store_changeable_box') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="price_foreigner">Section Title </label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Section Title" required>
                        </div>
                        <div class="form-group">
                            <label for="price_foreigner">Content </label>
                            <textarea class="ckeditor form-control" name="content"></textarea>
                        </div>
                        <div class="form-group" style="width: 50%">
                            <label for="price_foreigner">Type </label>
                            <select name="type" class="form-control" id="" required>
                                <option value="crusie_3">Cruise 3</option>
                                <option value="crusie_4">Cruise 4</option>
                            </select>
                        </div>
                        <div class="form-group" style="width: 50%">
                            <label for="type">Status </label>
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

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
    @endpush
