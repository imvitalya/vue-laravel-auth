<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignOutController extends Controller
{
    //
    public function __invoke ()
    {
        auth()->logout();
    }
}
