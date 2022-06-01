<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.statis {
            position: relative;
            border: 1px solid #543535;
        }

    </style>
    <title> CETAK ABSENSI </title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Absensi</b></p>

        <table class="static" align="center" rules="all" border="1px" style="width:95%;">
            <tr>

                <th scope="col">Nama Pegawai</th>
                <th scope="col">Nik</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam Masuk</th>
                <th scope="col">Jam Keluar</th>
                <th scope="col">Jumlah Jam Kerja</th>
            </tr>
            @foreach ($dtCetakAbsensi as $item)

                <tr>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->user->nik }}</td>
                    <td>{{ $item->tgl }}</td>
                    <td>{{ $item->jammasuk }}</td>
                    <td>{{ $item->jamkeluar }}</td>
                    <td>{{ $item->jamkerja }}</td>
                </tr>
            @endforeach

        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
