@extends('admin.departments.layout')
@section('main_content')


    <div class="card">
    <div class="card-header">Course show Page</div>
    <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">ID : {{ $exams->id }}</h5>
                <h5 class="card-title">Name : {{ $exams->name }}</h5>
                <h5 class="card-title">blood : {{ $exams->blood }}</h5>
                <h5 class="card-title">number : {{ $exams->number }}</h5>
                <h5 class="card-title">department_id : {{ $exams->department_id }}</h5>
                <h5 class="card-title">session_id : {{ $exams->session_id }}</h5>
                <h5 class="card-title">semester : {{ $exams->semester }}</h5>
                <h5 class="card-title">course_id : {{ $exams->course_id }}</h5>
                <h5 class="card-title">section_name  : {{ $exams->section_name  }}</h5>
                <h5 class="card-title">type : {{ $exams->type }}</h5>
                <h5 class="card-title">credit : {{ $exams->credit }}</h5>
                <h5 class="card-title">progress : {{ $exams->progress }}</h5>


    </div>

        </hr>

    </div>
    </div>



@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection
