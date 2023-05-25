<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('welcome');

    }
    public function about(){
        return view('about');

    }






    public function business($x){
        $arr = ['Cargo', 'Web Hosting','Domain'];


    return view('business',['businesses'=>$arr,'type'=>$x]);

    }
    public function service($x){
        $arr = ['Cleaning CPU', 'Custom Build','Buy and sell'];
    $name = "Wazih Ullah Tanzim";
    $email= "Wazihullahtanzim@gmail.com";


    return view('service',compact('arr','name','email','x'));

    }

}
