@extends('layouts.admin.admin_layout')
@section('title')
    <title>CE International</title>
@endsection
@section('content')
<div class="page-wrapper">
      
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <!-- <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div> -->
                    </div>

                </div>
            </div>
<!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daily Careers</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"> {{ $todayCareers }}</h2>
                                    <span class="text-muted">Todays Careers</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Careers</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"> {{ $totalCareers }}</h2>
                                    <span class="text-muted">Total Careers</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            @if(session('success'))
                                <div class="alert alert-success mb-1 mt-1">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('fail'))
                                <div class="alert alert-danger mb-1 mt-1">
                                    {{ session('fail') }}
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Latest Careers List</h4>
                                    <div class="col-md-2 ms-auto">
                                        <a href="{{ route('career-list') }}" class="btn btn-primary">View more</a>
                                    </div>
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table stylish-table no-wrap" id="contactTable">
                                        <thead>
                                            <tr>
                                                <th>SlNo</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>CV</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($career))
                                            @php $i = 1; @endphp
                                            @foreach ($career as $row)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>
                                                        <a href="{{ asset('assets/uploads/cv/' . $row->cv) }}" target="_blank">
                                                            <i class="fas fa-file-pdf" style="color: red;"></i>
                                                        </a>
                                                    </td>
                                                    <td>{{ $row->more }}</td>
                                                    <td>
                                                            <span>
                                                            <a href="{{ route('deletecareer', ['id' => $row->id]) }}" data-toggle="tooltip"
                                                                data-placement="top" title="Delete"><i
                                                                    class="fa fa-trash color-danger text-danger"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @php $i++; @endphp
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('js')
@endsection 