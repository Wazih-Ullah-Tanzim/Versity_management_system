@extends('admin.departments.layout')
@section('main_content')


    <div class="card">
    <div class="card-header">Department show Page</div>
    <div class="card-body">


            <div class="card-body">
            <h5 class="card-title">Name : {{ $departments->name }}</h5>

    </div>

        </hr>

    </div>
    </div>



@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection
