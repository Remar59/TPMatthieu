@extends('layouts.app')

@section('content')

<a href="/consoles" class="text-gray-500">Retour aux consoles</a>
<h1 class="text-3xl mb-3">Ajouter une console</h1>

@foreach ($errors->all() as $error)
    <p class="text-red-500">{{ $error }}</p>
@endforeach

<form action="" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="block">Titre</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" class="rounded shadow border-gray-300 w-full">
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="brand" class="block">Marque</label>
        <textarea name="brand" id="brand" class="rounded shadow border-gray-300 w-full">{{ old('brand') }}</textarea>
        @error('brand')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="color" class="block">Couleur</label>
        <input type="text" name="color" id="color" value="{{ old('color') }}" class="rounded shadow border-gray-300 w-full">
        @error('color')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="released_at" class="block">Date de sortie</label>
        <input type="date" name="released_at" id="released_at" value="{{ old('released_at') }}" class="rounded shadow border-gray-300 w-full">
        @error('released_at')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <button class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Ajouter</button>
</form>

@endsection