<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsolesController extends Controller
{
    public function indexConsoles()
    {
        return view(
            'consoles/indexconsoles',
            [
                'consoles' => Console::all(),
            ]
        );
    }


    public function show($id)
    {
        $console = Console::findOrFail($id); // Select * from movie where id = :id OU 404

        return view('consoles/showconsoles', ['console' => $console]);
    }

    public function create()
    {
        return view('consoles/createconsoles', [
            'consoles' => Console::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2',
            'brand' => 'required|min:6',
            'color' => 'required|min:1',
            'cover' => 'nullable|string',
            'Type' => 'min:4|nullable',
            'released_at' => 'nullable|date',
        ]);

        $console = new Console();
        $console->title = $request->title;
        $console->brand = $request->brand;
        $console->color = $request->color;
        //$console->cover = 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg';
        $console->Type = $request->Type;
        $console->released_at = $request->released_at;
        $console->save();

        return redirect('/consoles');
    }


    public function destroy($id)
    {
        Console::destroy($id);
        return redirect('/consoles');
    }




}
