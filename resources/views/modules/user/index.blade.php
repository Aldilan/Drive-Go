@extends('layouts.userLayout')
@section('contents')
    <main class="flex justify-center min-h-screen max-h-screen bg-slate-50">
        <div class="container flex justify-between gap-20">
            <div class="px-28 flex flex-col justify-center flex-1 gap-7">
                <h1 class="text-5xl font-bold">
                    Find, book, and rental car in <span class="text-primary-blue">Easy</span> steps
                </h1>
                <span class="text-lg text-neutral-400">
                    Find the ready-made car you need quickly here. </span>
            </div>
            <div class="flex justify-center items-center">
                <img src="images/landing-car.png" class="h-80" alt="">
            </div>
        </div>
    </main>
    <section class="flex justify-center bg-white h-20">
        <div class="container relative">
            <div class="absolute flex left-1/2 -translate-x-1/2 -top-10 bg-white p-3 rounded-xl gap-12">
                <div class="flex flex-col">
                    <h2 class="font-bold">Type Car</h2>
                    <span>select</span>
                </div>
                <div class="flex flex-col">
                    <h2 class="font-bold">Pickup Date</h2>
                    <span>select</span>
                </div>
                <div class="flex flex-col">
                    <h2 class="font-bold">Return Date</h2>
                    <span>select</span>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <button class="bg-primary-blue h-full px-10 rounded-xl font-bold text-white">Order</button>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center bg-white">
        <div class="container flex flex-col justify-center items-center gap-14">
            <div class="flex flex-col justify-center items-center">
                <span class="text-neutral-400 font-semibold text-sm">HOW IT WORKS</span>
                <h2 class="text-3xl font-bold">Rent with following 3 working steps</h2>
            </div>
            <div class="grid grid-cols-3 gap-20">
                <div class="flex flex-col justify-start items-center gap-5">
                    <div class="flex bg-white p-10 rounded-xl shadow-md">
                        <i class='bx bxs-car text-primary-blue text-5xl'></i>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <h3 class="font-bold text-lg">Choose car</h3>
                        <span class="text-neutral-400">Choose your preferred car</span>
                    </div>
                </div>
                <div class="flex flex-col justify-start items-center gap-5">
                    <div class="flex bg-primary-blue p-10 rounded-xl shadow-md">
                        <i class='bx bx-calendar text-white text-5xl'></i>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <h3 class="font-bold text-lg">Pickup date</h3>
                        <span class="text-neutral-400">Schedule your car pickup</span>
                    </div>
                </div>
                <div class="flex flex-col justify-start items-center gap-5">
                    <div class="flex bg-white p-10 rounded-xl shadow-md">
                        <i class='bx bxs-car text-primary-blue text-5xl'></i>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <h3 class="font-bold text-lg">Book car</h3>
                        <span class="text-neutral-400">Book your car so it's ready to go</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
