<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN MASYARAKAT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <h3 style="text-align: center;">
        Laporan Aplikasi Ngadu Yuk!
    </h3>
    <p style="text-align: center;">
        <img src="assets/svg/Technologies.svg" alt="" width="86" height="77" name="Image2"
            align="bottom" border="0" hspace="1" />
    </p>
    <p style="text-align: center;">
        <span style="font-family: Arial, serif; font-weight: 700">
            <span style="font-size: medium;">LAPORAN MASYARAKAT
                <br />
                <span style=" border-bottom:2px solid; padding-bottom:20px;">Jl. Raya Sukaraja - Sukabumi No.15,
                    Ciburuy, Kec. Cigombong, Kabupaten Bogor, Jawa Barat 16110
                </span>
                <br />
            </span>
        </span>
    </p>
    <br>
    @if ($countData == 0)
        <div class="text-center">
            <h1>Tidak Ada Data</h1>
        </div>
    @else
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul Laporan</th>
                    <th>Isi Laporan</th>
                    <th>Pelapor</th>
                    <th>Status</th>
                    <th>Tanggapan</th>
                    <th>Tanggal Tanggapan</th>
                    <th>Penanggap</th>
                    <th>Tanggal Kejadian</th>
                </tr>
            </thead>
            @foreach ($datas as $data)
                @php
                    $i += 1;
                @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $data['judul_laporan'] }}</td>
                    <td>{{ $data['isi_laporan'] }}</td>
                    <td>



                        @foreach ($users as $user)
                            @if ($user->nik == $data->nik)
                                {{ $user->nama }}
                            @else
                                -
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $data['status'] }}</td>
                    <td>
                        @foreach ($responses as $response)
                            @if ($response->id_pengajuan == $data->id)
                                {{ $response->tanggapan }}
                            @else
                                -
                            @endif
                        @endforeach
                    </td>
                    <td>

                        @foreach ($responses as $response)
                            @if ($response->id_pengajuan == $data->id)
                                {{ $response->tgl_tanggapan }}
                            @endif
                        @endforeach
                    </td>
                    <td>

                        @foreach ($responses as $response)
                            @if ($response->id_pengajuan == $data->id)
                                @foreach ($admins as $admin)
                                    @if ($admin->id == $response->id_petugas)
                                        {{ $admin->nama_petugas }}
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $data['tgl_pengaduan'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</body>

</html>
