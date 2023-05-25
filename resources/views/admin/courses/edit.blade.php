@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Edit Course</div>
                            <div class="card-body">
                            </br>


    <form action="{{ url('admin/course/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"></br>

        <label>Short name</label></br>
        <input type="text" name="short_name" id="short_name" value="{{$courses->short_name}}" class="form-control"></br>

        <label>Credit</label></br>
        <input type="number" name="credit" id="credit" step="any" value="{{$courses->credit}}" class="form-control"></br>

        <label>Type</label></br>
        <input type="text" name="type" id="type" value="{{$courses->type}}" class="form-control"></br>

        <label for="semester">Choose Semester:</label></br>


        <select name="semester" id="semester" class="form-control">
            <option value="1" {{$courses->semester=='1' ? 'selected' : ''}} >1st</option>
            <option value="2" {{$courses->semester=='2' ? 'selected' : ''}}>2nd</option>
            <option value="3" {{$courses->semester=='3' ? 'selected' : ''}}>3rd</option>
            <option value="4" {{$courses->semester=='4' ? 'selected' : ''}}>4th</option>
            <option value="5" {{$courses->semester=='5' ? 'selected' : ''}}>5th</option>
            <option value="6" {{$courses->semester=='6' ? 'selected' : ''}}>6th</option>
            <option value="7" {{$courses->semester=='7' ? 'selected' : ''}}>7th</option>
            <option value="8" {{$courses->semester=='8' ? 'selected' : ''}}>8th</option>

          </select></br>
          {{-- fetch dept from database --}}

          <label for="department_id" >Select Department and Your dept ID was: {{ $courses->department_id }} </label>
          <div class="form-group">
            <select class="form-control" name="department_id"  id="department_id">

                @foreach($departments as $dept )

                <option value="{{$dept->id}}">{{$dept->id}}->{{$dept->name}}</option>

                @endforeach

            </select>
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


