@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Create Session </div>
                            <div class="card-body">
                            </br>



      <form method="post" action="{{ url('admin/session') }}"  >
        {!! csrf_field() !!}
       
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>


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


