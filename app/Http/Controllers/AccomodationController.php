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
     * Display home page.
     */
    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|decimal:2',
            'people' => 'required|integer',
            'description' => 'required',
            'image' => 'required'
        ]);
        
        $accomodation = new Accomodation();
        $accomodation->name = $request->name;
        $accomodation->description = $request->description;
        $accomodation->price = $request->price;
        $accomodation->people = $request->people;
        $accomodation->image = $request->image;
        $accomodation->save();

        return redirect()->intended('/getAccomodations');
    }
    /**
     * Display home page.
     */
    public function remove(Accomodation $accomodation)
    {
        //$accomodation = Accomodation::find(1);
        $accomodation->delete();
        return redirect()->intended('/getAccomodations');
    }
    /**
     * Display home page.
     */
    public function get(Accomodation $accomodation)
    {
        return View('crud.editAccomodation', ['accomodation' => $accomodation]);
    }
    public function new()
    {
        return View('crud.addAccomodation');
    }
    /**
     * Display home page.
     */
    public function getAll()
    {
        $accomodations = Accomodation::all();
        return View('crud.crudAccomodation', ['accomodations' => $accomodations]);
    }
    /**
     * Update existing accomodation.
     */
    public function update(Accomodation $accomodation,Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|decimal:2',
            'people' => 'required|integer',
            'image' => 'required'
        ]);
        //Add Data
        $accomodation->name = $request->name;
        $accomodation->description = $request->description;
        $accomodation->price = $request->price;
        $accomodation->people = $request->people;
        $accomodation->image = $request->image;
        $accomodation->save();

        return redirect()->intended('/getAccomodations');
    }
}
