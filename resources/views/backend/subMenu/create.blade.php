@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Sub Menu</a></li>
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
                    <form id="inline-validation" class="form-horizontal form-stripe" action="{{ route('sub-menu.store') }}"
                        method="POST">
                        @csrf
                        <h3>Add New Sub Menu</h3>
                        <div class="form-group">
                            <label for="link">Parent Menu</label>
                            <select name="parent_id" class="form-control" id="">
                                <option value="">--Select--</option>
                                @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Menu Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Menu Title" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="link">Menu Link</label>
                            <input type="text" name="link" class="form-control" id="title" placeholder="Menu Link"
                                autocomplete="off" required>
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
