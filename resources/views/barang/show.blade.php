@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Detail Barang</h2>

        <div>
            <strong>ID:</strong> {{ $data->id }}<br>
            <strong>Kode Barang:</strong> {{ $data->KodeBarang }}<br>
            <strong>Nama Barang:</strong> {{ $data->NamaBarang }}<br>
            <strong>Satuan:</strong> {{ $data->Satuan }}<br>
            <strong>Harga Satuan:</strong> {{ $data->HargaSatuan }}<br>
            <strong>Stok:</strong> {{ $data->Stok }}
        </div>

        <a href="{{ url('barang') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection