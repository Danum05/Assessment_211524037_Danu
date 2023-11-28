@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Edit Tenan</h2>

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

        <form action="{{ url('tenan/'.$data->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="KodeTenan">Kode Tenan:</label>
                <input type="text" class="form-control" name="KodeTenan" value="{{ old('KodeTenan', $data->KodeTenan) }}">
            </div>

            <div class="form-group">
                <label for="NamaTenan">Nama Tenan:</label>
                <input type="text" class="form-control" name="NamaTenan" value="{{ old('NamaTenan', $data->NamaTenan) }}">
            </div>

            <div class="form-group">
                <label for="HP">HP:</label>
                <input type="text" class="form-control" name="HP" value="{{ old('HP', $data->HP) }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection