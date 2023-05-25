<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Department;
use App\Models\Section;
use App\Models\Session;
use App\Models\Teacher;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index')->with('teachers', $teachers);
    }


    public function create()
    {
        $departments = Department::all();
        $sessions = Session::all();
        $courses = Course::all();
        $sections = Section::all();

        return view('admin.teachers.create')->with('departments', $departments)->with('sessions', $sessions)->with('courses', $courses)->with('sections', $sections);
    }


    public function store(Request $request)
    {
        // $input = $request->all();
        // Teacher::create($input);
        $data = new Teacher([
           
            'name'          => $request->get('name'),
            'department_id' => $request->get('department_id'),
            'session_id'        => $request->get('session_id'),
            'semester'      => $request->get('semester'),
            'course_id'        => $request->get('course_id'),
            'section_name'  => json_encode($request->get('section_name')),
            'type'          => $request->get('type'),
            'progress'          => $request->get('progress'),


        ]);
        $data->save();

        return redirect()->to('admin/teacher')->with('success', 'Teacher Added!');
    }


    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('admin.teachers.show')->with('teachers', $teacher);
    }


    public function edit($id)
    {
        $departments = Department::all();
        $sessions = Session::all();
        $courses = Course::all();
        $sections = Section::all();

        $teacher = Teacher::find($id);
        return view('admin.teachers.edit')->with('teachers', $teacher)->with('courses', $courses)->with('departments', $departments)->with('sessions', $sessions)->with('sections', $sections);
    }


    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $input = $request->all();
        $teacher->update($input);

        return redirect()->to('admin/teacher/');
    }


    public function destroy($id)
    {
        Teacher::find($id)->delete();
        return redirect()->to('admin/teacher/');
    }
}
