@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Create Section</div>
                            <div class="card-body">
                            </br>


            <form method="post" action="{{ url('admin/section') }}">
                {!! csrf_field() !!}
                <label for="department_id">Select Department:</label>
                <div class="form-group">
                    <select class="form-control" name="department_id" id="department_id">

                        @foreach ($departments as $dept)
                            <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                        @endforeach
                    </select>
                </div>

                <label for="session_id">Select Session:</label>
                <div class="form-group">
                    <select class="form-control" name="session_id" id="session_id">

                        @foreach ($sessions as $sess)
                            <option value="{{ $sess->id }}">{{ $sess->name }}</option>
                        @endforeach
                    </select>
                    </br>
                    <label>Select Semster:</label></br>

                    <select name="semester" id="semester" class="form-control">
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        <option value="5">5th</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                        <option value="8">8th</option>

                    </select></br>

                    <label for="course_id">Select Course ID:</label>
                    <div class="form-group">
                        <select class="form-control" name="course_id" id="course_id">

                            @foreach ($courses as $cou)
                                <option value="{{ $cou->id }}">{{ $cou->name }}</option>
                            @endforeach
                        </select>
                        </br>

                        <label>Select Section:</label></br>
                        <div class="form-group">
                            <input type="checkbox" id="section_name" name="section_name[]" value="A1">
                            <label for="section_name"> A1</label></br>
                            <input type="checkbox" id="section_name" name="section_name[]" value="A2">
                            <label for="section_name"> A2</label></br>

                            <input type="checkbox" id="section_name" name="section_name[]" value="B1">
                            <label for="section_name"> B1</label></br>
                            <input type="checkbox" id="section_name" name="section_name[]" value="B2">
                            <label for="section_name"> B2</label></br>

                            <input type="checkbox" id="section_name" name="section_name[]" value="C1">
                            <label for="section_name"> C1</label></br>
                            <input type="checkbox" id="section_name" name="section_name[]" value="C2">
                            <label for="section_name"> C2</label></br>
                        </div>






                        <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
    </div>
    </div>

    </div>




    </main>
    @endsection

    @section('scripts')
    <script src="{{ asset('admin/assets/js/tables.js') }}"></script>
    @endsection

