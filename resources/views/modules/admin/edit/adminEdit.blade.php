@extends('layouts.adminForm')
@section('contents')
    <form action="{{ url('manage/admin/' . $data['id']) }}" method="post" class="px-4 flex flex-col gap-4">
        @csrf
        @method('put')
        <main class="w-full grid gap-4 lg:grid-cols-2">
            <section class="w-full flex flex-col justify-center items-center gap-4">
                <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Nama Petugas"
                    name="nama" id="nama" value="{{ $data['nama_petugas'] }}">
                @error('nama')
                    <label class="text-red-500 px-4" for="nama">{{ $message }}</label>
                @enderror
                <input type="number" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="No. Telepon"
                    name="telp" id="telp" value="{{ $data['telp'] }}">
                @error('telp')
                    <label class="text-red-500 px-4" for="telp">{{ $message }}</label>
                @enderror
            </section>
            <section class="w-full flex flex-col justify-center lg:justify-start items-center gap-4">
                <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Username"
                    name="username" id="username" value="{{ $data['username'] }}">
                @error('username')
                    <label class="text-red-500 px-4" for="username">{{ $message }}</label>
                @enderror
                <input type="password" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Password"
                    name="password">
                @error('password')
                    <label class="text-red-500 px-4" for="password">{{ $message }}</label>
                @enderror
            </section>
        </main>
        @include('partials.buttonForm')
    </form>
@endsection
