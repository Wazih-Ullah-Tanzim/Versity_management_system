@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">ALL Courses info</div>
                    <div class="card-body">
                    </br>
                        {{--<label>Add New Courses : </label>
                        <a href="{{ url('admin/course/create') }}" class="btn btn-success btn-sm" title="Add New Course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>--}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Short name</th>
                                        <th>Credit</th>
                                        <th>Type</th>
                                        <th>Semester</th>
                                        <th>Dept ID</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->short_name}}</td>
                                        <td>{{ $item->credit }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->semester }}</td>
                                        <td>{{ $item->department_id }}</td>


                                        <td>
                                            {{--<a href="{{ url('/admin/course/' . $item->id) }}" title="View Course"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>--}}
                                            <a href="{{ url('/admin/course/' . $item->id . '/edit') }}" title="Edit Course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{url('admin/course/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                {{-- <input type="submit" class="btn btn-danger btn-sm" value="Delete"> --}}

                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </br>
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
