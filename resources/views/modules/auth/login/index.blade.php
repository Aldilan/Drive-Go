@extends('layouts.authLayout')
@section('contents')
    <form class="flex flex-col bg-white justify-center items-start px-36 gap-7">
        <div class="flex flex-col gap-2">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-14">
            </a>
            <h2 class="text-3xl font-bold">Hey, Hello</h2>
            <span>We're so excited to see you again!</span>
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="" class="font-semibold text-xl">Username</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full">
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="" class="font-semibold text-xl">Password</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full">
        </div>
        <button class="bg-primary-blue w-full py-3 rounded-lg text-white font-bold">Login</button>
        <span class="text-sm">Don't have account? <a href="{{ url('/auth/regis') }}" class="text-primary-blue">Regis
                here.</a></span>
    </form>
@endsection
