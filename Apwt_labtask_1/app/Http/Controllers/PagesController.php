<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return"doyal baba kola khaiso gas lagaya khao";
    }

    public function home()
    {
        return view("home") ;
    }
    public function contact()
    {
        return view("contact") ;
    }
    public function product()
    {
        return view("product") ;
    }
    public function about()
    {
        return view("about") ;
    }
    public function team()
    {
        return view("team") ;
    }
    public function signup()
    {
        return "ok";
    }

    public function profile()
    {
        $name="Mushfiq";
        $id="19-40067-1";
        $dob="27-6-1999";
        $names= array("abul","kalam","azad");
        return view("profile") 
        ->with('name',$name)
        ->with('id',$id)
        ->with('dob',$dob)
        ->with('names',$names);

    }
}

