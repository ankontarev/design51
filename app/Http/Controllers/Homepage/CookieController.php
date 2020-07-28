<?php

namespace App\Http\Controllers\Homepage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CookieController extends Controller
{
    //Speichert die cookie einstellungen Individuell was der Kunde anklickt oder nicht
    public function saveCustomCookie(Request $request)
    {
        $inputStats = false;
        $inputMarketing = false;
        $inputMedien = false;

        if($request->input('stats')){$inputStats = true;}
        if($request->input('marketing')){$inputMarketing = true;}
        if($request->input('medien')){$inputMedien = true;}
        
        $cookie = array(
            'stats' => $inputStats,
            'marketing' => $inputMarketing,
            'medien' => $inputMedien
        );

        $request->session()->forget('cookiesetting');
        Session::put('cookiesetting', $cookie);
        return redirect()->back();
    }

    //Speichert alle Cookies mit Erlaubnis alles zu verwenden
    public function saveAllCookie()
    {
        $cookie = array(
            'stats' => true,
            'marketing' => true,
            'medien' => true
        );

        Session::put('cookiesetting', $cookie);
        return redirect()->back();
    }

    public function cookieSettings()
    {
        return view("modules.cookiebar.cookieSettings");
    }

    public function cookieDelet()
    {
        \session()->forget('cookiesetting');
        return redirect('/');
    }

}
