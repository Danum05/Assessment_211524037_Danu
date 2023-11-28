@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Tambah Tenan</h2>

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

        <form action="{{ url('tenan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="KodeTenan">Kode Tenan:</label>
                <input type="text" class="form-control" name="KodeTenan" value="{{ old('KodeTenan', session('KodeTenan')) }}">
            </div>

            <div class="form-group">
                <label for="NamaTenan">Nama Tenan:</label>
                <input type="text" class="form-control" name="NamaTenan" value="{{ old('NamaTenan', session('NamaTenan')) }}">
            </div>

            <div class="form-group">
                <label for="HP">HP:</label>
                <input type="text" class="form-control" name="HP" value="{{ old('HP', session('HP')) }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection