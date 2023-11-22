@extends('layouts.app')

@section('content')
<div class="flex items-center gap-10 mb-6">
    <h1 class="text-3xl">Consoles</h1>
</div>
<a href="/consoles/creer"
            class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter une console</a>

<div class="grid grid-cols-3 gap-6">
    @foreach ($consoles as $console)
    <a href="/showconsoles/{{ $console->id }}">  
    <div class="border p-4 rounded shadow">
            <h2>{{ $console->title }}</h2>
            <p> {{$console->color}} </p>
            <a class="text-sm bg-red-500 px-2 py-1 text-gray-200" href="/consoles/{{ $console->id }}/supprimer" onclick='return confirm("Êtes-vous sûr de vouloir supprimer {{$console->title}} ?")'>Supprimer</a> 
        </div></a>  
    @endforeach
</div>
@endsection