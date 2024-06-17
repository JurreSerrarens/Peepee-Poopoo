<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodations = Accomodation::all();
        return view('accomodations', ['accomodations' => $accomodations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(accomodation $accomodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accomodation $accomodation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accomodation $accomodation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accomodation $accomodation)
    {
        //
    }
}
