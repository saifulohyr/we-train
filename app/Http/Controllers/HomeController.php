<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $partners = Partner::where('is_active', true)->orderBy('order', 'asc')->get();
        return view('pages.home');
    }
}
