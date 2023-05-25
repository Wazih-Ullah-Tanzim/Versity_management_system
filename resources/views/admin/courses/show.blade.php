@extends('admin.departments.layout')
@section('main_content')


    <div class="card">
    <div class="card-header">Course show Page</div>
    <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">ID : {{ $courses->id }}</h5>
                <h5 class="card-title">Name : {{ $courses->name }}</h5>
                <h5 class="card-title">short_name : {{ $courses->short_name }}</h5>
                <h5 class="card-title">credit : {{ $courses->credit }}</h5>
                <h5 class="card-title">type : {{ $courses->type }}</h5>
                <h5 class="card-title">semester : {{ $courses->semester }}</h5>
                <h5 class="card-title">department_id : {{ $courses->department_id }}</h5>

    </div>

        </hr>

    </div>
    </div>



@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection
