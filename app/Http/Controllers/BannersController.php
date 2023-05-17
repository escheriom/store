<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function index()
    {
     return view('banners.banners');
    }

    public function criar()
    {
     return view('banners.criar');
    }
}
