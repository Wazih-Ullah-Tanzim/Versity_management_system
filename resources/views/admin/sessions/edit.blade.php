
@extends('admin.layouts.default')
@section('main_content')

<main id="main" class="main">

            <div class="container" style="width: 50rem;">
                <div class="row">

                    <div class="col-lg-12 wider-col">
                        <div class="card">
                            <div class="card-header">Edit Session </div>
                            <div class="card-body">
                            </br>



    <form action="{{ url('admin/session/' .$sessions->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$sessions->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$sessions->name}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$sessions->status}}" class="form-control"></br>

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


