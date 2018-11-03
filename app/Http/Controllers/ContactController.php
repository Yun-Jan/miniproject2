<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function home(){
        return view('welcome');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }

    function store(Request $request){
        $name=$request->name;
        return redirect()->route('thanks',['name'=>$name]);
    }
    function thanks($name, Request $request){
        return view('pages.thankyou')->with(compact('name'));
    }
}
