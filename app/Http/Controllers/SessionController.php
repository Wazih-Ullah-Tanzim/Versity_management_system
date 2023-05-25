<?php

namespace App\Http\Controllers;
use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::all();
      return view ('admin.sessions.index')->with('sessions', $sessions);
    }


    public function create()
    {

        return view('admin.sessions.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Session::create($input);

        return redirect()->to('admin/session/')->with('message', 'Session Added!');
        /*return redirect('admin.session')->with('flash_message', 'Session Added!');*/
    }


    public function show($id)
    {
        $session = Session::find($id);
        return view('admin.sessions.show')->with('sessions', $session);
    }


    public function edit($id)
    {
        $session = Session::find($id);
        return view('admin.sessions.edit')->with('sessions', $session);
        // return view('admin.sessions.edit')->with('sessions', $session);
    }


    public function update(Request $request, $id)
    {
        $session = Session::find($id);
        $input = $request->all();
        $session->update($input);

        return redirect()->to('admin/session/');

        // return redirect('admin.session')->with('flash_message', 'Session Updated!');
    }


    public function destroy($id) {
        Session::find($id)->delete();
        return redirect()->to('admin/session/');
     }
}
