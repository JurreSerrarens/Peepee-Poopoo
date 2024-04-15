<?php

namespace App\Http\Controllers;

use App\Models\Bestelling;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class BestellingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Post an order.
     */
    public function postOrder(Request $request)
    {
        // Todo validatie data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'ticket_id' => 'required',
            'amount'=> 'required',
        ]);
        //Add Data
        $order = new Bestelling();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->ticket_id = $request->ticket_id;
        $order->amount = $request->amount;
        $order->save();

        return View('ticketorderd');
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
    public function show(Bestelling $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bestelling $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bestelling $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bestelling $ticket)
    {
        //
    }
}
