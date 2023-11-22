<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsolesController extends Controller
{
    public function showConsoles()
    {
        return view('consoles/homeconsoles');
    }
}
