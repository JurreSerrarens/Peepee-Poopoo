<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    /**
     * Display home page.
     */
    public function index()
    {
        return View('home');
    }
    /**
     * Display ticket page.
     */
    public function tickets()
    {
        return View('tickets');
    }
    /**
     * Display attraction page.
     */
    public function attracties()
    {
        return View('attracties');
    }
    /**
     * Display attraction details page.
     */
    public function attractieDetail()
    {
        return View('attractieDetail');
    }
    /**
     * Display openingtime page.
     */
    public function tijden()
    {
        return View('tijden');
    }
    /**
     * Display contacts page.
     */
    public function contact()
    {
        return View('contact');
    }
}
