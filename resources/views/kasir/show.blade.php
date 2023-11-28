<!-- resources/views/kasir/show.blade.php -->

@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Detail Kasir</h2>

        <div>
            <strong>ID:</strong> {{ $data->id }}<br>
            <strong>Kode Kasir:</strong> {{ $data->KodeKasir }}<br>
            <strong>Nama:</strong> {{ $data->Nama }}<br>
            <strong>HP:</strong> {{ $data->HP }}
        </div>

        <a href="{{ url('kasir') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection