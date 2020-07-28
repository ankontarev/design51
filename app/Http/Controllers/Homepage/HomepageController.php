<?php

namespace App\Http\Controllers\Homepage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class HomepageController extends Controller
{
    public function home()
    {
        return view('home.landingpage.design51');
    }

    public function test()
    {
        return view('home.landingpage.test');
    }

}
