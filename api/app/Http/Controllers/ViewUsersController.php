<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ViewUsersController extends Controller
{
    //

    public function __construct ()
    {
        $this->middleware(['auth:api']);
    }

    public function __invoke ()
    {
        $users = User::paginate(10);

        return response()->json(compact('users'));
    }

    public function byId()
    {
        //
        $users = User::orderBy('id', 'desc')->get();

        return response()->json(compact('users'));
    }

    public function byName()
    {
        //
        $users = User::orderBy('name', 'desc')->get();

        return response()->json(compact('users'));
    } 

    public function byEmail()
    {
        //
        $users = User::orderBy('email', 'desc')->get();

        return response()->json(compact('users'));
    }
}
