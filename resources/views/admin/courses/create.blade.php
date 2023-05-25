@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Create Course</div>
                            <div class="card-body">
                            </br>


      <form method="post" action="{{ url('admin/course') }}"  >
        {!! csrf_field() !!}
        <label>ID</label></br>
        <input type="number" name="id" id="id" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Short name</label></br>
        <input type="text" name="short_name" id="short_name" class="form-control"></br>

        <label>Credit</label></br>
        <input type="number" name="credit" id="credit" step="any" class="form-control"></br>

        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>

        <label for="semester">Choose Semester:</label></br>


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
          {{-- fetch dept from database --}}

          <label for="department_id" >Select Department:</label>
          <div class="form-group">
            <select class="form-control" name="department_id" id="department_id">

                @foreach($departments as $dept)
                <option value="{{$dept->id}}" >{{$dept->name}}</option>
                @endforeach
            </select>
          </div>

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



