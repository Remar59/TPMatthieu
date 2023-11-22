@extends('layouts.app')

@section('content')
<div class="flex items-center gap-10 mb-6">
    <h1 class="text-3xl">Consoles</h1>
</div>

<div class="grid grid-cols-3 gap-6">

        <div class="border p-4 rounded shadow">
            <h1 class="text-3xl">{{ $console->title }}</h1>
            {{ $console->color }}
        </div>

</div>
@endsection