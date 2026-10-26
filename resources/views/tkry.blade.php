<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Karyawan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="p-4 bg-light">

    <h1 class="mb-4 fw-bold">Input Karyawan</h1>

    <form action="/aksi_tkry" method="POST" class="no-print" style="max-width: 500px;">


        <label class="fw-semibold">Username:</label>
        <input type="text" name="u" class="form-control" required>
        <br>

        <label class="fw-semibold">Password:</label>
        <input type="password" name="p" class="form-control" required>
        <br>

        <label class="fw-semibold">Email:</label>
        <input type="email" name="e" class="form-control" required>
        <br>

        <label class="fw-semibold">Level:</label>
        <select name="l" class="form-select" required>
            <option value="">-Pilih-</option>
            <option value="admin">Admin</option>
            <option value="karyawan">Karyawan</option>
            <option value="pelanggan">Pelanggan</option>
        </select>
        <br>

        <label class="fw-semibold">Nama Karyawan:</label>
        <input type="text" name="nama" class="form-control" required>
        <br>

        <label class="fw-semibold">Alamat:</label>
        <input type="text" name="alamat" class="form-control" required>
        <br>

        <label class="fw-semibold">Jenis Kelamin:</label> 
        <br>
        <input type="radio" name="jk" value="L" class="form-check-input" required> Pria
        <input type="radio" name="jk" value="P" class="form-check-input"> Wanita
        <br><br>

        <label class="fw-semibold">Jabatan:</label>
        <select name="jabatan" class="form-select" required>
            <option value="">-Pilih-</option>
            @foreach ($jabatan as $value)
                <option value="{{ $value->id_jabatan }}">
                    {{ $value->nama_jabatan }}
                </option>
            @endforeach
        </select>
        <br>

        <label class="fw-semibold">Agama:</label>
        <select name="agama" class="form-select" required>
            <option value="">-Pilih-</option>
            @foreach ($agama as $value)
                <option value="{{ $value->id_agama }}">
                    {{ $value->nama_agama }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit" class="btn btn-primary px-4">Simpan</button>
        <a href="/home" class="btn btn-secondary px-4">Kembali</a>
        
    </form>

</body>
</html>
