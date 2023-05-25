@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Edit Section</div>
                            <div class="card-body">
                            </br>


    <form action="{{ url('admin/section/' .$sections->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$sections->id}}" id="id" />
        <label for="department_id">Select Department and Your dept ID was: {{ $sections->department_id }} </label>
                <div class="form-group">
                    <select class="form-control" name="department_id" id="department_id">

                        @foreach ($departments as $dept)

                            <option value="{{ $dept->id }}">{{ $dept->id }}->{{ $dept->name }}</option>
                        @endforeach

                    </select>
                </div>
        <label for="session_id" >Select Session and Your Session ID was: {{ $sections->session_id }}</label>
          <div class="form-group">
            <select class="form-control" name="session_id" id="session_id">

                @foreach($sessions as $sess)
                <option value="{{$sess->id}}" >{{$sess->id}}->{{$sess->name}}</option>
                @endforeach
            </select>
        </br>


        <label>Select Semster:</label></br>

        <select name="semester" id="semester" class="form-control">
            <option value="1" {{$sections->semester=='1' ? 'selected' : ''}}>1st</option>
            <option value="2" {{$sections->semester=='2' ? 'selected' : ''}} >2nd</option>
            <option value="3" {{$sections->semester=='3' ? 'selected' : ''}} >3rd</option>
            <option value="4" {{$sections->semester=='4' ? 'selected' : ''}} >4th</option>
            <option value="5" {{$sections->semester=='5' ? 'selected' : ''}} >5th</option>
            <option value="6" {{$sections->semester=='6' ? 'selected' : ''}} >6th</option>
            <option value="7" {{$sections->semester=='7' ? 'selected' : ''}} >7th</option>
            <option value="8" {{$sections->semester=='8' ? 'selected' : ''}} >8th</option>

          </select></br>
          <label for="course_id" >Select Course ID and Your Course ID was: {{ $sections->course_id }}</label>
        <div class="form-group">
          <select class="form-control" name="course_id" id="course_id">

              @foreach($courses as $cou)
              <option value="{{$cou->id}}" >{{$cou->id}}->{{$cou->name}}</option>
              @endforeach
          </select>
        </br>


        {{$sections->section_name=="" ? 'checked' : ''}}
        <label>Select Section:</label></br>
        <div class="form-group">
            <input type="checkbox" id="section_name" name="section_name[]"  @if(is_array(old('section_name[]')) && in_array('A1', old('section_name[]'))) checked @endif value="A1">
         <label for="section_name"> A1</label></br>
            <input type="checkbox" id="section_name" name="section_name[]"  {{ (is_array(old('section_name[]')) and in_array('A2', old('section_name'))) ? ' checked' : '' }} value="A2">
         <label for="section_name"> A2</label></br>

            <input type="checkbox" id="section_name" name="section_name[]"  {{ (is_array(old('section_name[]')) and in_array('B1', old('section_name'))) ? ' checked' : '' }} value="B1">
         <label for="section_name"> B1</label></br>
            <input type="checkbox" id="section_name" name="section_name[]"  {{ (is_array(old('section_name[]')) and in_array('B2', old('section_name'))) ? ' checked' : '' }} value="B2">
         <label for="section_name"> B2</label></br>

            <input type="checkbox" id="section_name" name="section_name[]"  {{ (is_array(old('section_name[]')) and in_array('C1', old('section_name'))) ? ' checked' : '' }} value="C1">
         <label for="section_name"> C1</label></br>
            <input type="checkbox" id="section_name" name="section_name[]"  {{ (is_array(old('section_name[]')) and in_array('C2', old('section_name'))) ? ' checked' : '' }} value="C2">
         <label for="section_name"> C2</label></br>
         </div>
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



