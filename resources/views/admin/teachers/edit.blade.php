@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

    <div class="container" style="width: 50rem;">
        <div class="row">

            <div class="col-lg-12 wider-col">
                <div class="card">
                    <div class="card-header">Edit Teacher</div>
                    <div class="card-body">
                        </br>

                        <form action="{{ url('admin/teacher/' . $teachers->id) }}"
                            method="post">
                            {!! csrf_field() !!}
                            @method('PATCH')

                            <input type="hidden" name="id" id="id" value="{{ $teachers->id }}" id="id" />
                            <label>Name</label></br>
                            <input type="text" name="name" id="name" value="{{ $teachers->name }}"
                                class="form-control"></br>

                            <label for="department_id">Select Department and Your dept ID was:
                                {{ $teachers->department_id }} </label>
                            <div class="form-group">
                                <select class="form-control" name="department_id" id="department_id">

                                    @foreach($departments as $dept)

                                        <option value="{{ $dept->id }}">{{ $dept->id }}->{{ $dept->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <label for="session_id">Select Session and Your Session ID was:
                                {{ $teachers->session_id }}</label>
                            <div class="form-group">
                                <select class="form-control" name="session_id" id="session_id">

                                    @foreach($sessions as $sess)
                                        <option value="{{ $sess->id }}">{{ $sess->id }}->{{ $sess->name }}
                                        </option>
                                    @endforeach
                                </select>
                                </br>
                                <label for="semester">Choose Semester:</label></br>

                                <select name="semester" id="semester" class="form-control">
                                    <option value="1"
                                        {{ $teachers->semester == '1' ? 'selected' : '' }}>
                                        1st</option>
                                    <option value="2"
                                        {{ $teachers->semester == '2' ? 'selected' : '' }}>
                                        2nd</option>
                                    <option value="3"
                                        {{ $teachers->semester == '3' ? 'selected' : '' }}>
                                        3rd</option>
                                    <option value="4"
                                        {{ $teachers->semester == '4' ? 'selected' : '' }}>
                                        4th</option>
                                    <option value="5"
                                        {{ $teachers->semester == '5' ? 'selected' : '' }}>
                                        5th</option>
                                    <option value="6"
                                        {{ $teachers->semester == '6' ? 'selected' : '' }}>
                                        6th</option>
                                    <option value="7"
                                        {{ $teachers->semester == '7' ? 'selected' : '' }}>
                                        7th</option>
                                    <option value="8"
                                        {{ $teachers->semester == '8' ? 'selected' : '' }}>
                                        8th</option>

                                </select></br>

                                <label for="course_id">Select course_id and Your course_id ID was:
                                    {{ $teachers->course_id }}</label>
                                <div class="form-group">
                                    <select class="form-control" name="course_id" id="course_id">

                                        @foreach($courses as $c)
                                            <option value="{{ $c->id }}">{{ $c->id }}->{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    </br>


                                    <?php
                        $con=mysqli_connect("localhost","root","","versity_db");

                        $brand_query="SELECT * FROM teachers WHERE id= $teachers->id";
                        $query_run=mysqli_query($con,$brand_query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            foreach($query_run as $sec)
                            {
                                ?>
                                    <label>Your Previous section : <?=$sec['section_name']; ?></br></label>

                                    <?php


                            }
                        }
                        else {
                            echo "No Record Found";
                        }

                        ?>
                                    </br>
                                    <label>Select Section:</label></br>
                                    <div class="form-group">
                                        <input type="checkbox" id="section_name" name="section_name[]" <blade
                                            if|%20(is_array(old(%26%2339%3Bsection_name%5B%5D%26%2339%3B))%20%26%26%20in_array(%26%2339%3BA1%26%2339%3B%2C%20old(%26%2339%3Bsection_name%5B%5D%26%2339%3B)))%20checked%20%40endif%20value%3D%26%2334%3BA1%26%2334%3B%3E>
                                        <label for="section_name"> A1</label></br>
                                        <input type="checkbox" id="section_name" name="section_name[]"
                                            {{ (is_array(old('section_name[]')) and in_array('A2', old('section_name'))) ? ' checked' : '' }}
                                            value="A2">
                                        <label for="section_name"> A2</label></br>

                                        <input type="checkbox" id="section_name" name="section_name[]"
                                            {{ (is_array(old('section_name[]')) and in_array('B1', old('section_name'))) ? ' checked' : '' }}
                                            value="B1">
                                        <label for="section_name"> B1</label></br>
                                        <input type="checkbox" id="section_name" name="section_name[]"
                                            {{ (is_array(old('section_name[]')) and in_array('B2', old('section_name'))) ? ' checked' : '' }}
                                            value="B2">
                                        <label for="section_name"> B2</label></br>

                                        <input type="checkbox" id="section_name" name="section_name[]"
                                            {{ (is_array(old('section_name[]')) and in_array('C1', old('section_name'))) ? ' checked' : '' }}
                                            value="C1">
                                        <label for="section_name"> C1</label></br>
                                        <input type="checkbox" id="section_name" name="section_name[]"
                                            {{ (is_array(old('section_name[]')) and in_array('C2', old('section_name'))) ? ' checked' : '' }}
                                            value="C2">
                                        <label for="section_name"> C2</label></br>
                                    </div>
                                    {{-- fetch dept from database --}}

                                    </br>
                                    <label>Credit</label></br>
                                    <input type="text" name="type" id="type" value="{{ $teachers->type }}"
                                        class="form-control"></br>


                                    <label>progress</label></br>
                                    <input type="number" name="progress" id="progress"
                                        value="{{ $teachers->progress }}" class="form-control"></br>







                                    {{-- fetch dept from database --}}



                                    </br>

                                    <input type="submit" value="Update" class="btn btn-success"></br>
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
