@extends('layout')
@section('title', 'signup')

@section('content')

    <!-- Error Messages -->
    <x-error />

    <!-- Signup Form -->
    <div class="container">
        <div class="bg-gray-100 flex justify-center items-center min-h-screen">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full sm:w-96">
                <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Sign Up</h2>
                <form action="{{ route('signup.post') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-600">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="cpassword" class="block text-sm font-medium text-gray-600">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password" required
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <button type="submit"
                        class="w-full py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-200">Sign
                        Up</button>
                </form>
            </div>
        </div>
    </div>

@endsection
