<?php

namespace App\Http\Controllers;

use App\Models\Attractie;
use Illuminate\Http\Request;

class AttractieController extends Controller
{
    /**
     * Display index page.
     */
    public function index()
    {
        $attracties = Attractie::all();
        return view('attracties', ['attracties' => $attracties]);
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
    public function show(Attractie $attractie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attractie $attractie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attractie $attractie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attractie $attractie)
    {
        //
    }
}
