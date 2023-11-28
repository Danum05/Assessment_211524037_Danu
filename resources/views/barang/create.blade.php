<!-- resources/views/barang/create.blade.php -->

@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Tambah Barang</h2>

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

        <form action="{{ url('barang') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="KodeBarang">Kode Barang:</label>
                <input type="text" class="form-control" name="KodeBarang" value="{{ old('KodeBarang', session('KodeBarang')) }}">
            </div>

            <div class="form-group">
                <label for="NamaBarang">Nama Barang:</label>
                <input type="text" class="form-control" name="NamaBarang" value="{{ old('NamaBarang', session('NamaBarang')) }}">
            </div>

            <div class="form-group">
                <label for="Satuan">Satuan:</label>
                <input type="text" class="form-control" name="Satuan" value="{{ old('Satuan', session('Satuan')) }}">
            </div>

            <div class="form-group">
                <label for="HargaSatuan">Harga Satuan:</label>
                <input type="text" class="form-control" name="HargaSatuan" value="{{ old('HargaSatuan', session('HargaSatuan')) }}">
            </div>

            <div class="form-group">
                <label for="Stok">Stok:</label>
                <input type="text" class="form-control" name="Stok" value="{{ old('Stok', session('Stok')) }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection