@extends('layouts.adminLayout')
@section('contents')
    <main class="min-h-[80vh]">
        <div class="container grid grid-cols-2 px-28 gap-5">
            <div class="bg-white shadow-lg gap-5 rounded-lg h-64 flex justify-center items-center flex-col">
                <span class="text-3xl font-semibold"> {{ $countUser }}</span>
                <span class="font-semibold">the total number of user</span>
            </div>
            <div class="bg-white shadow-lg gap-5 rounded-lg h-64 flex justify-center items-center flex-col">
                <span class="text-3xl font-semibold"> {{ $countBrand }}</span>
                <span class="font-semibold">the total number of brand</span>
            </div>
            <div class="bg-white shadow-lg gap-5 rounded-lg h-64 flex justify-center items-center flex-col">
                <span class="text-3xl font-semibold"> {{ $countCar }}</span>
                <span class="font-semibold">the total number of car</span>
            </div>
            <div class="bg-white shadow-lg gap-5 rounded-lg h-64 flex justify-center items-center flex-col">
                <span class="text-3xl font-semibold"> {{ $countCar }}</span>
                <span class="font-semibold">the total number of transaction</span>
            </div>
        </div>
    </main>
@endsection
