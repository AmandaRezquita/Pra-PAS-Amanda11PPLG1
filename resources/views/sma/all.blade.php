@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Akreditasi SMA 2022-2023</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sekolah</th>
                <th>Alamat</th>
                <th>Akreditasi</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($smadb as $sma)
                <tr>
                    <td>{{ $sma->id }}</td>
                    <td>{{ $sma->Sekolah }}</td>
                    <td>{{ $sma->Alamat }}</td>
                    <td>{{ $sma->Akreditasi }}</td>
                    <td>
                    <a href="/sma/detail/{{ $sma->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
