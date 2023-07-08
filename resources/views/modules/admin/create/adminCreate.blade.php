@extends('layouts.adminForm')
@section('contents')
    <form action="{{ url('manage/admin') }}" method="post" class="px-4 flex flex-col gap-4">
        @csrf
        <main class="w-full grid gap-4 lg:grid-cols-2">
            <section class="w-full flex flex-col justify-center items-start gap-4">
                <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Nama Petugas"
                    name="nama" id="nama">
                @error('nama')
                    <label class="text-red-500 px-4" for="judul">{{ $message }}</label>
                @enderror
                <input type="number" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="No. Telepon"
                    name="telp" id="telp">
                @error('telp')
                    <label class="text-red-500 px-4" for="telp">{{ $message }}</label>
                @enderror
            </section>
            <section class="w-full flex flex-col justify-center lg:justify-start items-start gap-4">
                <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Username"
                    name="username" id="username">
                @error('username')
                    <label class="text-red-500 px-4" for="usernmae">{{ $message }}</label>
                @enderror
                <input type="password" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Password"
                    name="password" id="password">
                @error('password')
                    <label class="text-red-500 px-4" for="password">{{ $message }}</label>
                @enderror
            </section>
            <input type="hidden" value="petugas" name="level" class="level">
        </main>
        @include('partials.buttonForm')
    </form>
@endsection
