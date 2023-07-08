@extends('layouts.adminLayout')
@section('contents')
    <main class="w-full px-4 justify-around items-center py-4">
        @if ($countData != 0)
            <table class="w-full table-auto text-center border-collapse border-2 ">
                <thead>
                    <tr>
                        <th class="border border-black">No.</th>
                        <th class="border border-black">NIK</th>
                        <th class="border border-black">Username</th>
                        <th class="border border-black">Nama Lengkap</th>
                        <th class="border border-black">No. Telepon</th>
                        <th class="border border-black">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        @php
                            $i += 1;
                        @endphp
                        <tr>
                            <td class="border border-black/50">{{ $i }}</td>
                            <td class="border border-black/50">{{ $data['nik'] }}</td>
                            <td class="border border-black/50">{{ $data['username'] }}</td>
                            <td class="border border-black/50">{{ $data['nama'] }}</td>
                            <td class="border border-black/50">{{ $data['telp'] }}</td>
                            <td class="border border-black/50 flex justify-evenly">
                                <a href="{{ url('manage/user/' . $data['id'] . '/edit') }}"><i
                                        class="fa-solid fa-pencil"></i></a>
                                <form action="{{ url('manage/user/' . $data['id']) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data masyarakat ini?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('partials.pagination')
        @else
            @include('partials.notFoundData')
        @endif
    </main>
@endsection
