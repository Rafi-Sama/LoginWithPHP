@extends('layout')
@section('title', 'login')

@section('content')
    <div class="container">
        <div class="bg-gray-100 flex justify-center items-center min-h-screen flex-col gap-4">
            <h1 class="text-5xl">HI, {{ auth()->user()->name }} !! </h1>
            <a href="/logout" class="bg-red-600 text-white hover:bg-red-700 px-8 py-4 rounded-md text-md font-medium">Logout</a>
        </div>
    </div>
@endsection
