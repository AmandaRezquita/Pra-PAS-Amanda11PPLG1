@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Akreditasi SMK 2022-2023</h1>
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
            @foreach ($smkdb as $smk)
                <tr>
                    <td>{{ $smk->id }}</td>
                    <td>{{ $smk->Sekolah }}</td>
                    <td>{{ $smk->Alamat }}</td>
                    <td>{{ $smk->Akreditasi }}</td>
                    <td>
                    <a href="/smk/detail/{{ $smk->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
