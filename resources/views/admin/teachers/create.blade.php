@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Assign Teacher</div>
                            <div class="card-body">
                            </br>


            <form method="post" action="{{ url('admin/teacher') }}">
                {!! csrf_field() !!}
                {{--<label>ID</label></br>
                <input type="number" name="id" id="id" class="form-control"></br>--}}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>

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

                        @foreach ($sessions as $s)
                            <option value="{{ $s->id }}">{{ $s->name }}</option>
                        @endforeach
                    </select>
                </div>
                </br>

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

                <label for="course_id">Select Course:</label>
                <div class="form-group">
                    <select class="form-control" name="course_id" id="course_id">

                        @foreach ($courses as $c)
                            <option value="{{ $c->id }}">{{ $c->short_name }}</option>
                        @endforeach
                    </select>
                </div>

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




                <div class="input-field">
                    <label for="type">
                        Subject Type:
                    </label>
                    <select name="type" id="type" class="form-control">
                        <option value="">Select Subject Type</option>
                        <option value="1.5">LAB 1.5</option>
                        <option value="2">LAB 2</option>
                        <option value="3">Theory 3</option>
                        <option value="4">Theory 4</option>
                    </select>
                </div>
            </br>

                <label>Progress</label></br>
                <input type="number" name="progress" id="progress" class="form-control"></br>



                </br>
                {{-- <label>Dept ID</label></br>
        <input type="number" name="department_id" id="department_id" class="form-control"></br> --}}




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
