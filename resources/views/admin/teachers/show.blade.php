@extends('admin.departments.layout')
@section('main_content')


    <div class="card">
    <div class="card-header">Course show Page</div>
    <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">SN : {{ $teachers->id }}</h5>
                <h5 class="card-title">Name : {{ $teachers->name }}</h5>
                <h5 class="card-title">blood : {{ $teachers->blood }}</h5>
                <h5 class="card-title">number : {{ $teachers->number }}</h5>
                <h5 class="card-title">department_id : {{ $teachers->department_id }}</h5>
                <h5 class="card-title">session_id : {{ $teachers->session_id }}</h5>
                <h5 class="card-title">semester : {{ $teachers->semester }}</h5>
                <h5 class="card-title">course_id : {{ $teachers->course_id }}</h5>
                <h5 class="card-title">section_name  : {{ $teachers->section_name  }}</h5>
                <h5 class="card-title">type : {{ $teachers->type }}</h5>
                <h5 class="card-title">credit : {{ $teachers->credit }}</h5>
                <h5 class="card-title">progress : {{ $teachers->progress }}</h5>


    </div>

        </hr>

    </div>
    </div>



@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection
