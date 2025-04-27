@extends('frontend.layout')

@section('content')

    <x-forms.form title="Log In" :action="route('login')" method="POST">

        @error('fail')
        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
        @enderror

        <x-forms.input
            label="Enter your email"
            type="email"
            placeholder="Enter your email"
            id="email"
        />

        <x-forms.input
            label="Enter your password"
            type="password"
            placeholder="Enter your password"
            id="password"
        />


        <x-forms.button/>

    </x-forms.form>

@endsection
