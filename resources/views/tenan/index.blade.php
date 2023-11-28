@extends('layout.template')

@section('konten')
    <div class="container">
        <h2>Daftar Tenan</h2>

        <div class="mb-3">
            <a href="{{ url('tenan/create') }}" class="btn btn-success">Tambah Tenan</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('tenan') }}" method="GET">
            <div class="form-group">
                <label for="katakunci">Cari:</label>
                <input type="text" class="form-control" name="katakunci" value="{{ request('katakunci') }}">
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Tenan</th>
                    <th>Nama Tenan</th>
                    <th>HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $tenan)
                    <tr>
                        <td>{{ $tenan->id }}</td>
                        <td>{{ $tenan->KodeTenan }}</td>
                        <td>{{ $tenan->NamaTenan }}</td>
                        <td>{{ $tenan->HP }}</td>
                        <td>
                            <a href="{{ url('tenan/'.$tenan->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('tenan/'.$tenan->id) }}" class="btn btn-info">Show</a>
                            <form action="{{ url('tenan/'.$tenan->id) }}" method="POST" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data tenan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $data->links() }}
    </div>
@endsection