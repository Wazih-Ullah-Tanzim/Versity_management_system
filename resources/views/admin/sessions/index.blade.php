@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">ALL Sessions info</div>
                    <div class="card-body">
                    </br>
                        {{--<label>Add New Sessions : </label>

                        <a href="{{ url('admin/session/create') }}" class="btn btn-success btn-sm" title="Add New Session">

                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <br/>
                        <br/>--}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sessions as $item)
                                    <tr>


                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            {{--<a href="{{ url('/admin/session/' . $item->id) }}" title="View Session"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>--}}
                                            <a href="{{ url('/admin/session/' . $item->id . '/edit') }}" title="Edit Session"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{url('admin/session/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                {{-- <input type="submit" class="btn btn-danger btn-sm" value="Delete"> --}}

                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

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
