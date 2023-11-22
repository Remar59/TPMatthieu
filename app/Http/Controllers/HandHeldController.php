<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandHeldController extends Controller
{
    public function showHandHeld()
    {
        return view('handheld/homehandheld');
    }
}
