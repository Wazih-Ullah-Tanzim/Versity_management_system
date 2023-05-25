@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Create Exam</div>
                            <div class="card-body">
                            </br>

            <form method="POST" action="{{ url('admin/exam') }}">
                {!! csrf_field() !!}
                <label>
                    User ID:
                </label>
                <select name="user_id" id="user_id" class="form-select">

                    <option value="{{Session::get('userid')}}" >{{Session::get('username')}}</option>

                </select>

                <label for="course_id">Select Course:</label>
                <div class="form-group">
                    <select class="form-control" name="course_id" id="course_id">

                        @foreach ($courses as $c)
                            <option value="{{ $c->id }}">{{ $c->short_name }}</option>
                        @endforeach
                    </select>
                </div>

                <label>CT 1 :</label>
                <div class="form-control">

                    <input type="radio" name="ct1" value="Not_taken">Not Taken</br>
                    <input type="radio" name="ct1" value="Taken">Taken</br>
                    <input type="radio" name="ct1" value="Mark_Given">Mark Given</br>

                </div>
            </br>
            <label>CT 2 :</label>
                <div class="form-control">

                    <input type="radio" name="ct2" value="Not_taken">Not Taken</br>
                    <input type="radio" name="ct2" value="Taken">Taken</br>
                    <input type="radio" name="ct2" value="Mark_Given">Mark Given</br>

                </div>
            </br>
            <label>CT 3 :</label>
                <div class="form-control">

                    <input type="radio" name="ct3" value="Not_taken">Not Taken</br>
                    <input type="radio" name="ct3" value="Taken">Taken</br>
                    <input type="radio" name="ct3" value="Mark_Given">Mark Given</br>

                </div>
            </br>
            <label>Assignment :</label>
                <div class="form-control">

                    <input type="radio" name="assign" value="Not_taken">Not Taken</br>
                    <input type="radio" name="assign" value="Taken">Taken</br>
                    <input type="radio" name="assign" value="Mark_Given">Mark Given</br>

                </div>
            </br>
            <label>Quiz :</label>
                <div class="form-control">

                    <input type="radio" name="quiz" value="Not_taken">Not Taken</br>
                    <input type="radio" name="quiz" value="Taken">Taken</br>
                    <input type="radio" name="quiz" value="Mark_Given">Mark Given</br>

                </div>
            </br>
            <label>Mid :</label>
                <div class="form-control">

                    <input type="radio" name="mid" value="Not_taken">Not Taken</br>
                    <input type="radio" name="mid" value="Taken">Taken</br>
                    <input type="radio" name="mid" value="Mark_Given">Mark Given</br>

                </div>
            </br>

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

