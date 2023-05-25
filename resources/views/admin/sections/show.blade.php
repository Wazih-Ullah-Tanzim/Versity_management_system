@extends('admin.departments.layout')
@section('main_content')


    <div class="card">
    <div class="card-header">Section show Page</div>
    <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">ID : {{ $sections->id }}</h5>
                <h5 class="card-title">Name : {{ $sections->name }}</h5>
                <h5 class="card-title">short_name : {{ $sections->session_id }}</h5>
                <h5 class="card-title">semester : {{ $sections->semester }}</h5>
                <h5 class="card-title">credit : {{ $sections->course_id }}</h5>
                <h5 class="card-title">type : {{ $sections->section_name }}</h5>


    </div>

        </hr>

    </div>
    </div>



@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection
