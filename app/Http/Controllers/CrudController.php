<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display home page.
     */
    public function users()
    {
        return redirect()->intended('/getUsers');
    }
    /**
     * Display home page.
     */
    public function accomodations()
    {
        return View('editAccomodations');
    }
    /**
     * Display home page.
     */
    public function attracties()
    {
        return View('editAttracties');
    }
}
