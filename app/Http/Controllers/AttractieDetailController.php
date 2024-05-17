<?php

namespace App\Http\Controllers;

use App\Models\AttractieDetail;
use Illuminate\Http\Request;

class AttractieDetailController extends Controller
{
    /**
     * Display index page.
     */
    public function index()
    {
        return view('attractieDetail');
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
    public function show(AttractieDetail $attractieDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttractieDetail $attractieDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttractieDetail $attractieDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttractieDetail $attractieDetail)
    {
        //
    }
}
