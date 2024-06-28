<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Post a booking.
     */
    public function postBooking(Request $request)
    {
        // Todo validatie data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'accomodation_id' => 'required',
            'people'=> 'required',
        ]);
        //Add Data
        $order = new booking();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->accomodation_id = $request->accomodation_id;
        $order->people = $request->people;
        $order->save();

        return View('booked');
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
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
