@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Edit Menu</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-lg-9">
                <div class="form-area">
                    <form id="inline-validation" class="form-horizontal form-stripe" method="POST"
                        action="{{ route('sub-menu.update', $subMenu->id) }}">
                        @csrf
                        @method('PUT')
                        <h3>Edit Sub Menu</h3>
                        <div class="form-group">
                            <label for="title">Menu Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $subMenu->title ?? '' }}"
                                id="title" placeholder="Sub Menu Title" required>
                        </div>
                        <div class="form-group">
                            <label for="link">Menu Link</label>
                            <input type="text" name="link" class="form-control" value="{{ $subMenu->link ?? '' }}"
                                id="link" required readonly>
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
