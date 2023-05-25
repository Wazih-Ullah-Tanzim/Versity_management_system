<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
      return view ('admin.departments.index')->with('departments', $departments);
    }


    public function create()
    {

        return view('admin.departments.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Department::create($input);

        return redirect()->to('admin/department/')->with('message', 'Department Added!');
        /*return redirect('admin.department')->with('flash_message', 'Department Added!');*/
    }


    public function show($id)
    {
        $department = Department::find($id);
        return view('admin.departments.show')->with('departments', $department);
    }


    public function edit($id)
    {
        $department = Department::find($id);
        return view('admin.departments.edit')->with('departments', $department);
        // return view('admin.departments.edit')->with('departments', $department);
    }


    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        $input = $request->all();
        $department->update($input);

        return redirect()->to('admin/department/');

        // return redirect('admin.department')->with('flash_message', 'Department Updated!');
    }


    public function destroy($id) {
        Department::find($id)->delete();
        return redirect()->to('admin/department/');
     }
}
