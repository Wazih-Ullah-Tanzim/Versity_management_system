<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
      return view ('admin.courses.index')->with('courses', $courses);
    }


    public function create()
    {
        $departments= Department::all();

        return view('admin.courses.create')->with('departments', $departments);
    }


    public function store(Request $request)
    {
        // $input = $request->all();
        // Course::create($input);
        $data= new Course([
            'id'            =>$request->get('id'),
            'name'          =>$request->get('name'),
            'short_name'    =>$request->get('short_name'),
            'credit'        =>$request->get('credit'),
            'type'          =>$request->get('type'),
            'semester'      =>$request->get('semester'),
            'department_id' =>$request->get('department_id'),
        ]);
        $data->save();

        return redirect()->to('admin/course')->with('success', 'Course Added!');

    }


    public function show($id)
    {
        $course = Course::find($id);
        return view('admin.courses.show')->with('courses', $course);
    }


    public function edit($id)
    {
        $departments= Department::all();
        $course = Course::find($id);
        return view('admin.courses.edit')->with('courses', $course)->with('departments', $departments);

    }


    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $input = $request->all();
        $course->update($input);

        return redirect()->to('admin/course/');


    }


    public function destroy($id) {
        Course::find($id)->delete();
        return redirect()->to('admin/course/');
     }
}
