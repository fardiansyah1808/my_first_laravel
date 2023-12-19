<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function about_us()
    {
        return view("about_us");
    }
    public function contact_us()
    {
        return view("contact_us");
    }
}
