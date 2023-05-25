@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">ALL Sections info</div>
                    <div class="card-body">
                    </br>
                        {{--<label>Add New Sections : </label>
                        <a href="{{ url('admin/section/create') }}" class="btn btn-success btn-sm" title="Add New Section">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>--}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Dept ID</th>
                                        <th>Session ID</th>
                                        <th>Semester</th>
                                        <th>Course ID</th>
                                        <th>Section Name</th>


                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sections as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->department_id }}</td>
                                        <td>{{ $item->session_id }}</td>
                                        <td>{{ $item->semester}}</td>
                                        <td>{{ $item->course_id}}</td>
                                        <td>{{ $item->section_name}}</td>



                                        <td>
                                            {{--<a href="{{ url('/admin/section/' . $item->id) }}" title="View Section"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>--}}
                                            <a href="{{ url('/admin/section/' . $item->id . '/edit') }}" title="Edit Section"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{url('admin/section/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
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
