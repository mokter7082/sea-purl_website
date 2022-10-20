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
                <h3 class=""><b>Cruises</b></h3>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cabin Type</th>
                                        <th>Bed Type</th>
                                        <th>Cruise Quantity</th>
                                        <th>Cruise Image</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cruises as $cruise)
                                        <tr>
                                            <td>{{ $cruise->id }}</td>
                                            <td>{{ $cruise->cabin_type }}</td>
                                            <td>{{ $cruise->bed_type }}</td>
                                            <td>{{ $cruise->cabin_qty }}</td>
                                            <td><img class="of_cover"
                                                    src="{{ url('public/cruise_three/' . $cruise->image) }}" width="100"
                                                    height="100"></td>
                                            <td>{{ $cruise->status }}</td>
                                            <td class="button_container">
                                                <a class="btn btn-sm btn-danger my_btn" onclick="myFunction();"
                                                    href="{{ route('cruise_three-delete', $cruise->id) }}">Delete</a>
                                                <a href="{{ route('cruise-three.edit', $cruise->id) }}"
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