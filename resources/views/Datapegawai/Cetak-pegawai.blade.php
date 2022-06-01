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
    <title> CETAK DATA PEGAWAI </title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Data Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width:95%;">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Tgl Lahir</th>
                <th scope="col">Alamat</th>
            </tr>
            @foreach ($dtCetakPegawai as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ date('y-m-d', strtotime($item->tglhr)) }}</td>
                    <td>{{ $item->alamat }}</td>
                </tr>
            @endforeach

        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
