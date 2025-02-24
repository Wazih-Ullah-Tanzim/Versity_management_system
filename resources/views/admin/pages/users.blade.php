@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Users
        <a href="{{url("export_users")}}" class="btn btn-success" style="margin-right: 60px" > <b>Export to Excel</b></a>
        <a  href="{{ URL::to("pdf_users") }}" class="btn btn-danger" style="margin-right: 80px" ><b>Export to PDF</b></a>
   </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Dept</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Role</th>
                    <th scope="col">Approved?</th>
                    <th scope="col">Approved</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                    <tr>
                        <td>
                            <img src="{{ asset('thumbnail/'.$u->profile_pic) }}" alt="">
                        </td>
                      <td>{{ $u->name }}</td>
                      <td>{{ $u->email }}</td>
                      <td>{{ $u->birth_date }}</td>
                      <td>{{ $u->number }}</td>
                      <td>{{ $u->department }}</td>
                      <td>{{ $u->gender }}</td>
                      <td>{{ $u->address }}</td>
                      <td>{{ $u->blood }}</td>

                      <td>{{ $u->role }}</td>
                      <td>{{ $u->is_approved }}</td>
                      <td>
                        @if($u->is_approved==0)
                        <a href="{{ url('admin/approve/'.$u->id) }}" class="btn btn-secondary">Approve</a>
                        @endif
                      </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection
