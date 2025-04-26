@extends('frontend.layout')


@section('content')

    <div class="flex items-center justify-center">
        <div class="p-6 max-w-md w-full bg-white rounded-lg shadow-lg ring-2 ring-green-500/50">
            <div class="flex flex-col items-center space-y-4">
                <!-- Checkmark Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <!-- Thank You Heading -->
                <h1 class="text-3xl font-bold text-gray-800">Thank You!</h1>
                <!-- Message -->
                <p class="text-gray-600 text-center">We appreciate your interest! You'll hear from us soon.</p>
                <!-- Optional Button -->
                <a href="/" class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">Back to Home</a>
            </div>
        </div>
    </div>

@endsection
