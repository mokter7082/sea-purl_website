@extends('layouts.app-backend')
@section('dashboard_content')
    <div class="content">
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard </a></li>
                    <li><a>Gallery</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-lg-12">
                @if (session()->has('update'))
                    <div class="alert alert-success">
                        {{ session()->get('update') }}
                    </div>
                @endif
                @if (session()->has('delete'))
                    <div class="alert alert-success">
                        {{ session()->get('delete') }}
                    </div>
                @endif
                <h3 class=""><b>Gallery</b></h3>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>gallery Image</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galleries as $gallery)
                                        <tr>
                                            <td>{{ $gallery->id }}</td>
                                            <td><img src="{{ url('public/galleries/' . $gallery->image) }}" width="100"
                                                    height="100"></td>
                                            <td>{{ $gallery->status }}</td>
                                            <td class="button_container">
                                                <a class="btn btn-sm btn-danger my_btn" onclick="myFunction();"
                                                    href="{{ route('gallery_delete', $gallery->id) }}">Delete</a>
                                                <a href="{{ route('gallery.edit', $gallery->id) }}"
                                                    class="btn btn-sm btn-success my_btn">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        </div>
    @endsection
    @push('scripts')
        <script>
            function myFunction() {
                if (!confirm("Are You Sure to delete this"))
                    event.preventDefault();
            }
        </script>
    @endpush
