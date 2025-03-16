@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold">My Projects</h1>
<div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold">Project 1</h2>
        <p class="mt-2 text-gray-600">Description of project 1.</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold">Project 2</h2>
        <p class="mt-2 text-gray-600">Description of project 2.</p>
    </div>
</div>
@endsection
