<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        return view('admin.pages.register');
    }
    public function createUser(Request $req)
    {
        $originalImage = $req->file('profile_pic');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path() . '/thumbnail/';
        $originalPath = public_path() . '/images/';

        $full_name = $originalImage->getClientOriginalName();
        $full_name_arr = explode(".", $full_name);
        $len = sizeof($full_name_arr);

        $extension = $full_name_arr[$len - 1];
        $filename = time() . '.' . $extension;
        $thumbnailImage->save($originalPath . $filename);
        $thumbnailImage->resize(100, 100);
        $thumbnailImage->save($thumbnailPath . $filename);

        //input
        $name = $req->name;
        $email = $req->email;
        $birth_date = $req->birth_date;
        $number = $req->number;
        $department = $req->department;
        $gender = $req->gender;
        $address = $req->address;
        $blood = $req->blood;
        $role = $req->role;
        $profile_pic = $filename;

        $password = $req->password;
        $confirm = $req->cnf_password;


        if ($password == $confirm) {
            $user_exists = User::where('email', '=', $email)->first();


            if ($user_exists) {
                return redirect()->back()->with('info', 'Account already Exists');
            } else {

                $obj = new User();
                $obj->name = $name;
                $obj->email = $email;
                $obj->birth_date = $birth_date;
                $obj->number = $number;
                $obj->department = $department;
                $obj->gender = $gender;
                $obj->address = $address;
                $obj->blood = $blood;
                $obj->role = $role;
                $obj->profile_pic = $filename;

                $obj->password = md5($password);


                if ($obj->save()) {
                    return redirect()->back()->with('info', 'Account created.Waiting for approval');
                }
            }
        } else {
            return redirect()->back()->with('info', 'Account mismatch');
        }
    }




    public function login()
    {
        return view('admin.pages.login');
    }
    public function userLogin(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $user = User::where('email', '=', $email)
            ->where('password', '=', md5($password))
            ->first();

        if ($user) {
            if ($user->is_approved == 1 && $user->role == 'Admin') {
                Session::put('username', $user->name);
                Session::put('userid', $user->id);
                Session::put('userimg', $user->profile_pic);
                Session::put('userrole', $user->role);
                return redirect('admin/users');
            }
            if ($user->is_approved == 1 && $user->role == 'Teacher') {
                Session::put('username', $user->name);
                Session::put('userid', $user->id);
                Session::put('userrole', $user->role);
                return redirect('admin/my_progress');
            }
            if ($user->is_approved == 1 && $user->role == 'Student') {
                Session::put('username', $user->name);
                Session::put('userid', $user->id);
                Session::put('userrole', $user->role);
                return redirect('admin/users');
            } else {
                return redirect()->back()->with('info', 'Not Approved Yet');
            }
        } else {
            return redirect()->back()->with('info', 'Password mismatch');
        }
    }



    public function logout()
    {
        Auth::logout(); // Log out the currently authenticated user
        // Additional logic if needed
        return redirect('/'); // Redirect to the desired page after logout
    }
}
