<!-- resources/views/kasir/create.blade.php -->

@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Tambah Kasir</h2>

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

        <form action="{{ url('kasir') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="KodeKasir">Kode Kasir:</label>
                <input type="text" class="form-control" name="KodeKasir" value="{{ old('KodeKasir', session('KodeKasir')) }}">
            </div>

            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" class="form-control" name="Nama" value="{{ old('Nama', session('Nama')) }}">
            </div>

            <div class="form-group">
                <label for="HP">HP:</label>
                <input type="text" class="form-control" name="HP" value="{{ old('HP', session('HP')) }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
