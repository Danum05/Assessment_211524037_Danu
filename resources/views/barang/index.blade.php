<!-- resources/views/barang/index.blade.php -->

@extends('layout.template')

@section('konten')
<div class="container">
    <h2>Data Barang</h2>
    <a href="{{ url('barang/create') }}" class="btn btn-success mb-2">Tambah Barang</a>

    <form method="GET" action="{{ url('barang') }}" class="mb-2">
        <div class="input-group">
            <input type="text" class="form-control" name="katakunci" placeholder="Cari Barang" value="{{ request('katakunci') }}">
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
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->NamaBarang }}</td>
                    <td>{{ $item->Satuan }}</td>
                    <td>{{ $item->HargaSatuan }}</td>
                    <td>{{ $item->Stok }}</td>
                    <td>
                        <a href="{{ url('barang/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('barang/'.$item->id) }}" class="btn btn-info">Show</a>
                        <form method="POST" action="{{ url('barang/'.$item->id) }}" class="d-inline">
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
