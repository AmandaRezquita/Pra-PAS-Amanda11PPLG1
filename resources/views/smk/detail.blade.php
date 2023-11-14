<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <h1>School Detail</h1>
        <table class="table">
        <div class="container">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $smk->id }}</td>
        </tr>
        <tr>
            <th>Sekolah</th>
            <td>{{ $smk->Sekolah }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $smk->Alamat }}</td>
        </tr>
        <tr>
            <th>Kepala Sekolah</th>
            <td>{{ $smk->Kepala_Sekolah }}</td>
        </tr>
        <tr>
            <th>Jumlah Siswa</th>
            <td>{{ $smk->Jumlah_Siswa }}</td>
        </tr>
        <tr>
            <th>Tanggal Pendirian</th>
            <td>{{ $smk->Tanggal_Pendirian }}</td>
        </tr>
        <tr>
            <th>Akreditasi</th>
            <td>{{ $smk->Akreditasi }}</td>
        </tr>
    </table>
    <a href="/sma/all" class="btn btn-primary mt-3">Back</a> 
    </div>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

