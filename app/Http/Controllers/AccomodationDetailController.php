<?php

namespace App\Http\Controllers;

use App\Models\AccomodationDetail;
use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationDetailController extends Controller
{
    /**
     * Display index page.
     */
    public function index(Accomodation $accomodation)
    {
        return view('accomodationDetail', ['accomodation' => $accomodation]);
    }
    //
}
