@extends('layouts.adminForm')
@section('contents')
    <form action="{{ url('manage/user/' . $data['id']) }}" method="post" class="px-4 flex flex-col gap-4">
        @csrf
        @method('put')
        <main class="w-full grid gap-4 lg:grid-cols-2">
            <section class="w-full flex flex-col justify-center items-start gap-4">
                <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" name="nama"
                    placeholder="Nama Lengkap" id="nama" value="{{ $data->nama }}">
                @error('nama')
                    <label class="text-red-500 px-4" for="nama">{{ $message }}</label>
                @enderror
                <input type="number" class="w-full p-4 rounded-md border-2 font-semibold" name="nik" placeholder="NIK" value="{{ $data->nik }}"
                    id="nik">
                @error('nik')
                    <label class="text-red-500 px-4" for="nik">{{ $message }}</label>
                @enderror
                <input type="number" class="w-full p-4 rounded-md border-2 font-semibold" name="telp" value="{{ $data->telp }}"
                    placeholder="No. Telepon" id="telp">
                @error('telp')
                    <label class="text-red-500 px-4" for="telp">{{ $message }}</label>
                @enderror
            </section>
            <section class="w-full flex flex-col justify-center lg:justify-start items-start gap-4">
                <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" name="username" value="{{ $data->username }}"
                    placeholder="Username" id="username">
                @error('username')
                    <label class="text-red-500 px-4" for="username">{{ $message }}</label>
                @enderror
                <input type="password" class="w-full p-4 rounded-md border-2 font-semibold" name="password"
                    placeholder="Password">
                @error('password')
                    <label class="text-red-500 px-4" for="password">{{ $message }}</label>
                @enderror
            </section>
        </main>
        @include('partials.buttonForm')
    </form>
@endsection
