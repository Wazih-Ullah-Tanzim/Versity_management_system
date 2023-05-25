@extends('admin.layouts.default')
@section('main_content')





<main id="main" class="main">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 wider-col">
                <div class="card">
                    <div class="card-header">My Progress info</div>
                    <div class="card-body">
                    </br>
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <label>
                                    Filter by Teacher Name
                                </label>
                                <select name="user_id" class="form-select">

                                    <option value="{{Session::get('userid')}}" >{{Session::get('username')}}</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                            </br>
                            {{--<button type="submit" class="btn btn-primary">Filter</button>--}}
                            </div>
                        </div>

                    </form>
                    <hr>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                       <th>SN</th>
                                       <th>Course ID</th>

                                       <th>CT1</th>
                                       <th>CT2</th>
                                       <th>CT3</th>
                                       <th>Assignment</th>
                                       <th>Quiz</th>
                                       <th>Mid</th>


                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($exams as $item )
                                    <tr>

                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->course_id }}</td>
                                        <td>{{ $item->ct1 }}</td>
                                        <td>{{ $item->ct2 }}</td>
                                        <td>{{ $item->ct3 }}</td>
                                        <td>{{ $item->assign }}</td>
                                        <td>{{ $item->quiz }}</td>
                                        <td>{{ $item->mid }}</td>




                                        <td>
                                            {{--<a href="{{ url('/admin/exam/' . $item->id) }}" title="View Course"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>--}}
                                            <a href="{{ url('/admin/exam/' . $item->id . '/edit') }}" title="Edit Course"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{url('admin/exam/' .$item->id)}}" accept-charset="UTF-8" style="display:inline">
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


