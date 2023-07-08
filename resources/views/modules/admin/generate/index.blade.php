@extends('layouts.adminForm')
@section('contents')
    <form action="{{ url('manage/report') }}" method="post"
        class="w-full px-4 flex flex-col gap-4 justify-center items-start py-4">
        @csrf
        <h2 class="font-semibold text-xl">Tanggal Kejadian :</h2>

        <section class="flex flex-col lg:flex-row gap-4 w-full">
            <div class="flex flex-col w-full gap-4">
                <label for="mulai" class="font-semibold text-xl">Mulai</label>
                <input type="date" class="w-full px-4 py-2" name="mulai" id="mulai">
                @error('mulai')
                    <label class="text-red-500 px-4" for="mulai">{{ $message }}</label>
                @enderror
            </div>
            <div class="flex flex-col w-full gap-4">
                <label for="sampai" class="font-semibold text-xl">Sampai</label>
                <input type="date" class="w-full px-4 py-2" name="sampai" id="sampai">
                @error('sampai')
                    <label class="text-red-500 px-4" for="sampai">{{ $message }}</label>
                @enderror
            </div>
        </section>
        <section class="w-full">
            @include('partials.buttonForm')
        </section>
    </form>
@endsection
