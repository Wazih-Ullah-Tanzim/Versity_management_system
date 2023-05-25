@extends('admin.sessions.layout')
@section('main_content')


    <div class="card">
    <div class="card-header">Session show Page</div>
    <div class="card-body">


            <div class="card-body">
            <h5 class="card-title">Name : {{ $sessions->name }}</h5>
            <h5 class="card-title">Status : {{ $sessions->status }}</h5>

    </div>

        </hr>

    </div>
    </div>



@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection
