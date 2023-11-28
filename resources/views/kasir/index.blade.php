<!-- resources/views/kasir/index.blade.php -->

@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Data Kasir</h2>
        <a href="{{ url('kasir/create') }}" class="btn btn-success mb-2">Tambah Kasir</a>

        <form method="GET" action="{{ url('kasir') }}" class="mb-2">
            <div class="input-group">
                <input type="text" class="form-control" name="katakunci" placeholder="Cari Kasir" value="{{ request('katakunci') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Kasir</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->KodeKasir }}</td>
                        <td>{{ $item->Nama }}</td>
                        <td>{{ $item->HP }}</td>
                        <td>
                            <a href="{{ url('kasir/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('kasir/'.$item->id) }}" class="btn btn-info">Show</a>
                            <form method="POST" action="{{ url('kasir/'.$item->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $data->appends(request()->input())->links() }}
    </div>
@endsection