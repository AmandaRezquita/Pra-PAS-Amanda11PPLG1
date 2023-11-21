@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Akreditasi SMA 2022-2023</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal_Lahir</th>
                <th>Alamat</th>
                <th>Sekolah</th>
                <th>Prestasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($murid as $muridb)
                <tr>
                    <td>{{ $muridb->id }}</td>
                    <td>{{ $muridb->Nama }}</td>
                    <td>{{ $muridb->Tanggal_Lahir }}</td>
                    <td>{{ $muridb->Alamat }}</td>
                    <td>{{ $muridb->Sekolah }}</td>
                    <td>{{ $muridb->Prestasi }}</td>
                    <td>
                    <a href="/murid/detail/{{ $muridb->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
