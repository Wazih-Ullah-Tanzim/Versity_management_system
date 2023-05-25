@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Edit Exam</div>
                            <div class="card-body">
                            </br>

            <form action="{{ url('admin/exam/' . $exams->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')

                <label for="course_id">Select course_id and Your course_id ID was:
                    {{ $exams->course_id }}</label>
                <div class="form-group">
                    <select class="form-control" name="course_id" id="course_id">

                        @foreach($courses as $c)
                            <option value="{{ $c->id }}">{{ $c->id }}->{{ $c->name }}</option>
                        @endforeach
                    </select>

                </div>
                    </br>


                <label>CT 1 :</label>
                <div class="form-control">

                    <input type="radio" name="ct1" value="Not_taken"   <?php if ($exams["ct1"]=="Not_taken"){echo "checked";}    ?>     >Not Taken</br>
                    <input type="radio" name="ct1" value="Taken"     <?php if ($exams["ct1"]=="Taken"){echo "checked";}    ?> >Taken</br>
                    <input type="radio" name="ct1" value="Mark_Given"  <?php if ($exams["ct1"]=="Mark_Given"){echo "checked";}    ?> >Mark Given</br>

                </div>
            </br>
            <label>CT 2 :</label>
                <div class="form-control">

                    <input type="radio" name="ct2" value="Not_taken"  <?php if ($exams["ct2"]=="Not_taken"){echo "checked";}  ?>   >Not Taken</br>
                    <input type="radio" name="ct2" value="Taken"     <?php if ($exams["ct2"]=="Taken"){echo "checked";}  ?>>Taken</br>
                    <input type="radio" name="ct2" value="Mark_Given"    <?php if ($exams["ct2"]=="Mark_Given"){echo "checked";}  ?>>Mark Given</br>

                </div>
            </br>
            <label>CT 3 :</label>
                <div class="form-control">

                    <input type="radio" name="ct3" value="Not_taken"  <?php if ($exams["ct3"]=="Not_taken"){echo "checked";}  ?>    >Not Taken</br>
                    <input type="radio" name="ct3" value="Taken"    <?php if ($exams["ct3"]=="Taken"){echo "checked";}  ?> >Taken</br>
                    <input type="radio" name="ct3" value="Mark_Given" <?php if ($exams["ct3"]=="Mark_Given"){echo "checked";}  ?> >Mark Given</br>

                </div>
            </br>
            <label>Assignment :</label>
                <div class="form-control">

                    <input type="radio" name="assign" value="Not_taken" <?php if ($exams["assign"]=="Not_taken"){echo "checked";}  ?>  >Not Taken</br>
                    <input type="radio" name="assign" value="Taken" <?php if ($exams["assign"]=="Taken"){echo "checked";}  ?>>Taken</br>
                    <input type="radio" name="assign" value="Mark_Given" <?php if ($exams["assign"]=="Mark_Given"){echo "checked";}  ?>>Mark Given</br>

                </div>
            </br>
            <label>quiz :</label>
                <div class="form-control">

                    <input type="radio" name="quiz" value="Not_taken"  <?php if ($exams["quiz"]=="Not_taken"){echo "checked";}  ?> >Not Taken</br>
                    <input type="radio" name="quiz" value="Taken" <?php if ($exams["quiz"]=="Taken"){echo "checked";}  ?>>Taken</br>
                    <input type="radio" name="quiz" value="Mark_Given" <?php if ($exams["quiz"]=="Mark_Given"){echo "checked";}  ?>>Mark Given</br>

                </div>
            </br>
            <label>Mid :</label>
                <div class="form-control">

                    <input type="radio" name="mid" value="Not_taken"   <?php if ($exams["mid"]=="Not_taken"){echo "checked";}  ?> >Not Taken</br>
                    <input type="radio" name="mid" value="Taken"  <?php if ($exams["mid"]=="Taken"){echo "checked";}  ?>>Taken</br>
                    <input type="radio" name="mid" value="Mark_Given"  <?php if ($exams["mid"]=="Mark_Given"){echo "checked";}  ?>>Mark Given</br>

                </div>
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

