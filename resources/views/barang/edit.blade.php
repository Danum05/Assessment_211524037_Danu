@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Edit Barang</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada masalah dengan inputan Anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('barang/'.$data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="KodeBarang">Kode Barang:</label>
                <input type="text" class="form-control" name="KodeBarang" value="{{ old('KodeBarang', $data->KodeBarang) }}">
            </div>

            <div class="form-group">
                <label for="NamaBarang">Nama Barang:</label>
                <input type="text" class="form-control" name="NamaBarang" value="{{ old('NamaBarang', $data->NamaBarang) }}">
            </div>

            <div class="form-group">
                <label for="Satuan">Satuan:</label>
                <input type="text" class="form-control" name="Satuan" value="{{ old('Satuan', $data->Satuan) }}">
            </div>

            <div class="form-group">
                <label for="HargaSatuan">Harga Satuan:</label>
                <input type="text" class="form-control" name="HargaSatuan" value="{{ old('HargaSatuan', $data->HargaSatuan) }}">
            </div>

            <div class="form-group">
                <label for="Stok">Stok:</label>
                <input type="text" class="form-control" name="Stok" value="{{ old('Stok', $data->Stok) }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection