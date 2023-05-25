<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Section;
use App\Models\Session;
use App\Models\Course;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('admin.sections.index')->with('sections', $sections);
    }


    public function create()
    {
        $departments = Department::all();
        $sessions = Session::all();
        $courses = Course::all();

        return view('admin.sections.create')->with('sessions', $sessions)->with('departments', $departments)->with('courses', $courses);
    }


    public function store(Request $request)
    {

        $data = new Section([
            'id'            => $request->get('id'),
            'department_id' => $request->get('department_id'),
            'session_id'    => $request->get('session_id'),
            'semester'      => $request->get('semester'),
            'course_id'     => $request->get('course_id'),
            //to input array we have to use json encode
            'section_name'  => json_encode($request->get('section_name')),

        ]);
        $data->save();

        return redirect()->to('admin/section')->with('success', 'Section Added!');
    }


    public function show($id)
    {
        $section = Section::find($id);
        return view('admin.sections.show')->with('sections', $section);
    }


    public function edit($id)
    {
        $sessions = Session::all();
        $courses = Course::all();
        $departments = Department::all();
        $section = Section::find($id);
        return view('admin.sections.edit')->with('sections', $section)->with('sessions', $sessions)->with('courses', $courses)->with('departments', $departments);
    }


    public function update(Request $request, $id)
    {
        $section = Section::find($id);
        $input = $request->all();
        $section->update($input);

        return redirect()->to('admin/section/');
    }


    public function destroy($id)
    {
        Section::find($id)->delete();
        return redirect()->to('admin/section/');
    }
}
