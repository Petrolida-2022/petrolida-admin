@extends('admin.layouts.main')

@section('content')
  @if (session()->has('message'))
    <div id="flash-data" data-flashdata="{{ session('message') }}"></div>
  @endif

  <!--Header-->
  <div class="page-breadcrumb d-flex flex-column flex-md-row align-items-center mb-3">
    <div class="breadcrumb-title pe-md-3">Stock Trading</div>
    <div class="ps-md-3 ms-md-auto mx-auto mx-md-0 mt-3 mt-md-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i> Dashboard</a></li>
          <li class="breadcrumb-item active d-none d-sm-block" aria-current="page">Stock Trading</li>
          <li class="breadcrumb-item active" aria-current="page">Leader Data</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end of Header-->

  <h6 class="mb-0 text-uppercase">Stock Trading Leader Data</h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Register Code</th>
              <th>Team Name</th>
              <th>Leader Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($leaders as $leader)
              <tr>
                <td class="align-middle text-center">{{ $loop->iteration }}</td>
                <td class="align-middle text-center">{{ $leader->register_code }}</td>
                <td class="align-middle text-start text-wrap">{{ $leader->team_name }}</td>
                <td class="align-middle text-start text-wrap">{{ $leader->name }}</td>
                <td class="align-middle text-start text-wrap">{{ $leader->email }}</td>
                <td class="align-middle text-start text-wrap">{{ $leader->phone }}</td>
                <td class="align-middle text-center">
                  <a href="/stc/{{ $leader->register_code }}">Detail</a>
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Register Code</th>
              <th>Team Name</th>
              <th>Leader Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  
@endsection