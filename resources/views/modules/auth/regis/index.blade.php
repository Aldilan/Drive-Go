@extends('layouts.authLayout')
@section('contents')
    <div class="flex flex-col bg-white justify-center items-start px-36 gap-7">
        <div class="flex flex-col gap-2">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-14">
            </a>
            <h2 class="text-3xl font-bold">Register Your Account</h2>
            <span>New here? please register an account first</span>
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="" class="font-semibold text-xl">Username</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full">
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="" class="font-semibold text-xl">Password</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full">
        </div>
        <button
            class="bg-gradient-to-r from-purple-400 via-primary-blue to-cyan-500 w-full py-3 rounded-lg text-white font-bold">Login</button>
        <span class="text-sm">Do you have an account? <a href="{{ url('/auth/login') }}" class="text-primary-blue">Login
                here.</a></span>
    </div>
@endsection
