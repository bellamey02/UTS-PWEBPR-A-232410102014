@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h1 class="text-3xl font-bold mb-5">Register</h1>

<form action="{{ route('contact') }}" method="GET">
    <div class="mb-4">
        <label for="name" class="block text-sm">Name</label>
        <input type="text" id="name" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm">Email</label>
        <input type="email" id="email" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label for="password" class="block text-sm">Password</label>
        <input type="password" id="password" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white p-2">Register</button>
</form>
@endsection
