<!-- resources/views/pegawai/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
</head>
<body>
    <h1>Tambah Pegawai</h1>
    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" id="jabatan" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
