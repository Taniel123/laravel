@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold">Contact Me</h1>
<form action="#" class="mt-6">
    <input type="text" placeholder="Your Name" class="w-full p-3 border rounded mb-4">
    <input type="email" placeholder="Your Email" class="w-full p-3 border rounded mb-4">
    <textarea placeholder="Your Message" class="w-full p-3 border rounded mb-4"></textarea>
    <button class="px-6 py-2 bg-blue-500 text-white rounded">Sending Message</button>
</form>
@endsection
