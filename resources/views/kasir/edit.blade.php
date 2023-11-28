<!-- resources/views/kasir/create.blade.php -->

@extends('layout.template')

@section('konten')
<div class="container">
    <h2>Edit Kasir</h2>

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

    <form action="{{ url('kasir/'.$data->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="KodeKasir">Kode Kasir:</label>
            <input type="text" class="form-control" name="KodeKasir" value="{{ old('KodeKasir', $data->KodeKasir) }}">
        </div>

        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" class="form-control" name="Nama" value="{{ old('Nama', $data->Nama) }}">
        </div>

        <div class="form-group">
            <label for="HP">HP:</label>
            <input type="text" class="form-control" name="HP" value="{{ old('HP', $data->HP) }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
