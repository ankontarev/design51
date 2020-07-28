<?php

namespace App\Http\Controllers\Homepage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Impressum und Datenschutz
class LegalController extends Controller
{
    // Impressum
    public function imprint()
    {
        return view("modules.cookiebar.cookieSettings");
    }

    // Datenschutz
    public function privacy()
    {
        return view("modules.cookiebar.cookieSettings");
    }
}