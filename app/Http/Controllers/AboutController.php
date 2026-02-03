<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.service', ['title' => 'About Us', 'description' => 'Learn more about WeTrain philosophy and team.']);
    }
}
