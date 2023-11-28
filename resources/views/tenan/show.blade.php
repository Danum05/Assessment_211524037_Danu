@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Detail Tenan</h2>

        <div>
            <strong>ID:</strong> {{ $data->id }}<br>
            <strong>Kode Tenan:</strong> {{ $data->KodeTenan }}<br>
            <strong>Nama Tenan:</strong> {{ $data->NamaTenan }}<br>
            <strong>HP:</strong> {{ $data->HP }}
        </div>
        <a href="{{ url('tenan') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection