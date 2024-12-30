<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kehadiran</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Data Kehadiran Pegawai</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Tanggal Kehadiran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kehadiran as $k)
                    <tr>
                        <td>{{ $k->pegawai->nama }}</td>
                        <td>{{ $k->tanggal }}</td>
                        <td>{{ $k->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
