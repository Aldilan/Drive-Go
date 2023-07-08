@extends('layouts.adminForm')
@section('contents')
    <main class="w-ful flex flex-col gap-8 p-4">
        <form class="w-full flex flex-col gap-4" action="{{ url('manage/report/' . $data['id']) }}" method="post">
            @csrf
            @method('put')
            <div class="w-full grid gap-4 lg:grid-cols-2">
                <div class="w-full flex flex-col justify-center items-start gap-4">
                    <label for="tglPengaduan" class="text-black font-semibold">Tanggal Kejadian</label>
                    <input type="date" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Tanggal Kejadian"
                        name="tglPengaduan" id="tglPengaduan" value="{{ $data['tgl_pengaduan'] }}">
                    @error('tglPengaduan')
                        <label class="text-red-500 px-4" for="tglPengaduan">{{ $message }}</label>
                    @enderror
                    <label for="pengirim" class="text-black font-semibold">Pengirim</label>
                    <input type="text" disabled class="w-full p-4 rounded-md border-2 font-semibold"
                        placeholder="Username Pengirim" name="pengirim" id="pengirim" value="{{ $pengirim->username }}">
                </div>
                <div class="w-full flex flex-col justify-center lg:justify-start items-start gap-4">
                    <label for="judul" class="text-black font-semibold">Judul Laporan</label>
                    <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Judul Laporan"
                        name="judul" id="judul" value="{{ $data['judul_laporan'] }}">
                    @error('judul')
                        <label class="text-red-500 px-4" for="judul">{{ $message }}</label>
                    @enderror
                    <label for="laporan" class="text-black font-semibold">Isi Laporan</label>
                    <input type="text" class="w-full p-4 rounded-md border-2 font-semibold" placeholder="Judul Laporan"
                        name="laporan" id="laporan" value="{{ $data['isi_laporan'] }}">
                    @error('laporan')
                        <label class="text-red-500 px-4" for="laporan">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            @include('partials.buttonForm')
        </form>
        <hr>
        <form class="w-full flex flex-col text-center gap-4" action="{{ url('manage/response') }}" method="post">
            @csrf
            <h2 class="text-xl font-bold">Beri Tanggapan</h2>
            <input type="hidden" value="{{ $data['id'] }}" name="idPengaduan">
            <textarea name="tanggapan" id="tanggapan" class="w-full p-4 rounded-md border-2 font-semibold" cols="30"
                rows="10" placeholder="Tanggapan"></textarea>
            @error('tanggapan')
                <label class="text-red-500 px-4" for="tanggapan">{{ $message }}</label>
            @enderror
            @include('partials.buttonForm')
        </form>
    </main>
@endsection
