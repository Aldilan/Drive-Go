@extends('layouts.authLayout')
@section('contents')
    <form action="{{ url('/auth/regis') }}" method="post"
        class="flex flex-col bg-white justify-center items-start px-36 gap-7 max-h-screen overflow-y-scroll pt-[30rem] pb-10">
        @csrf
        <div class="flex flex-col gap-2">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-14">
            </a>
            <h2 class="text-3xl font-bold">Register your Account</h2>
            <span>New here? please register an account first</span>
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="name" class="font-semibold text-xl">Name</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full" id="name" name="name"
                placeholder="Type your name here">
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="username" class="font-semibold text-xl">Username</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full" id="username" name="username"
                placeholder="Type your username here">
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="password" class="font-semibold text-xl">Password</label>
            <input type="password" class="border-2 px-2 py-1 rounded-md w-full" id="password" name="password"
                placeholder="Type your password here">
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="phone_number" class="font-semibold text-xl">Phone Number</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full" id="phone_number" name="phone_number"
                placeholder="Type your phone number here">
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="address" class="font-semibold text-xl">Address</label>
            <textarea name="address" id="address" cols="30" rows="10" class="border-2 px-2 py-1 rounded-md w-full"
                placeholder="Type your address here"></textarea>
        </div>
        <div class="flex flex-col w-full gap-2">
            <label for="license_id" class="font-semibold text-xl">Driver's License ID</label>
            <input type="text" class="border-2 px-2 py-1 rounded-md w-full" id="license_id" name="license_id"
                placeholder="Type your driver's license ID here">
        </div>
        <button type="submit" class="bg-primary-blue w-full py-3 rounded-lg text-white font-bold">Login</button>
        <span class="text-sm">Do you have an account? <a href="{{ url('/auth/login') }}" class="text-primary-blue">Login
                here.</a></span>
    </form>
@endsection
