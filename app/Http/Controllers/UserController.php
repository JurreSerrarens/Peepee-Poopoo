<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display home page.
     */
    public function add(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->intended('/getUsers');
    }
    /**
     * Display home page.
     */
    public function remove(User $user)
    {
        //$user = User::find(1);
        $user->delete();
        return redirect()->intended('/getUsers');
    }
    /**
     * Display home page.
     */
    public function get(User $user)
    {
        return View('crud.editUser', ['user' => $user]);
    }
    public function new()
    {
        return View('crud.addUser');
    }
    /**
     * Display home page.
     */
    public function getAll()
    {
        $users = User::all();
        return View('crud.crudUsers', ['users' => $users]);
    }
    /**
     * Update existing user.
     */
    public function update(User $user,Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        //Add Data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->intended('/getUsers');
    }
}
