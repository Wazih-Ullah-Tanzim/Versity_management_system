<?php


namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Session;

class ExamController extends Controller
{
    public function index(Request $request)
    {
        //$exams = Exam::all();
        //$all_exams = Exam::all();
        $exams = Exam::when($request->course_id != null, function ($q) use ($request) {
            return $q->where('course_id', $request->course_id);
        })
            ->paginate(10);



        return view('admin.exams.index')->with('exams', $exams);
    }
    public function myProgress(Request $request)
    {
        //$exams = Exam::when($request->user_id != null, function ($q) use ($request) {
        //    return $q->where('user_id', $request->user_id);
        //})
        //    ->paginate(10);



        $user_id = Session::get('userid');
        $exams = Exam::where('user_id', $user_id)->get();



        return view('admin.exams.myprogress')->with('exams', $exams);
    }



    public function create()
    {
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.exams.create')->with('courses', $courses)->with('departments', $departments);
    }


    public function store(Request $request)
    {
        // $input = $request->all();
        // Exam::create($input);
        $data = new Exam([
            //'id'            => $request->get('id'),
            'user_id'        => $request->get('user_id'),
            'course_id'        => $request->get('course_id'),
            'ct1'    => $request->get('ct1'),
            'ct2'    => $request->get('ct2'),
            'ct3'    => $request->get('ct3'),
            'assign'    => $request->get('assign'),
            'quiz'    => $request->get('quiz'),
            'mid'    => $request->get('mid'),

        ]);
        $data->save();

        return redirect()->to('admin/my_progress')->with('success', 'Exam Added!');
    }


    public function show($id)
    {
        $Exam = Exam::find($id);
        return view('admin.exams.show')->with('exams', $Exam);
    }


    public function edit($id)
    {
        $departments = Department::all();
        $courses = Course::all();
        $Exam = Exam::find($id);
        return view('admin.exams.edit')->with('courses', $courses)->with('exams', $Exam)->with('departments', $departments);
    }


    public function update(Request $request, $id)
    {
        $Exam = Exam::find($id);
        $input = $request->all();
        $Exam->update($input);

        return redirect()->to('admin/my_progress');
    }


    public function destroy($id)
    {
        Exam::find($id)->delete();
        return redirect()->to('admin/my_progress');
    }
}
