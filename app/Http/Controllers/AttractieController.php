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
     * Display home page.
     */
    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);
        
        $attractie = new Attractie();
        $attractie->name = $request->name;
        $attractie->description = $request->description;
        $attractie->type = $request->type;
        $attractie->image = $request->image;
        $attractie->save();

        return redirect()->intended('/getAttracties');
    }
    /**
     * Display home page.
     */
    public function remove(Attractie $attractie)
    {
        //$attractie = Attractie::find(1);
        $attractie->delete();
        return redirect()->intended('/getAttracties');
    }
    /**
     * Display home page.
     */
    public function get(Attractie $attractie)
    {
        return View('crud.editAttractie', ['attractie' => $attractie]);
    }
    public function new()
    {
        return View('crud.addAttractie');
    }
    /**
     * Display home page.
     */
    public function getAll()
    {
        $attracties = Attractie::all();
        return View('crud.crudAttractie', ['attracties' => $attracties]);
    }
    /**
     * Update existing attractie.
     */
    public function update(Attractie $attractie,Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required'
        ]);
        //Add Data
        $attractie->name = $request->name;
        $attractie->description = $request->description;
        $attractie->type = $request->type;
        $attractie->image = $request->image;
        $attractie->save();

        return redirect()->intended('/getAttracties');
    }
}
