@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Create Department</div>
                            <div class="card-body">
                            </br>


      <form method="post" action="{{ url('admin/department') }}"  >
        {!! csrf_field() !!}
        {{--<label>ID</label></br>
        <input type="number" name="id" id="id" class="form-control"></br>--}}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Full Name</label></br>
        <input type="text" name="full_name" id="full_name" class="form-control"></br>


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


