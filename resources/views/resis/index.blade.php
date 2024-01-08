<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-3">Daftar Resi</h2>

        <a href="{{ route('resis.create') }}" class="btn btn-primary mb-3">Create</a>

        <!-- Form untuk pencarian -->
        <form action="{{ route('resis.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari Nomor Resi" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary">Search</button>
                </div>
                @if(request('search'))
                    <div class="input-group-append">
                        <a href="{{ route('resis.index') }}" class="btn btn-outline-secondary">Reset</a>
                    </div>
                @endif
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Tanggal</th>
                        <th>Nomor Resi</th>
                        <th>Nama Pengirim</th>
                        <th>Nama Penerima</th>
                        <th>Berat</th>
                        <th>Jumlah</th>
                        <th>Biaya</th>
                        <th>COD</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($resis as $resi)
                        <tr>
                            <td>{{ Carbon\Carbon::parse($resi->tanggal)->format('d F Y') }}</td>
                            <td>{{ $resi->no_resi }}</td>
                            <td>{{ $resi->nama_pengirim }}</td>
                            <td>{{ $resi->nama_penerima }}</td>
                            <td>{{ $resi->berat }}</td>
                            <td>{{ $resi->jml }}</td>
                            <td>Rp {{ number_format($resi->biaya, 0, ',', '.') }}</td>
                            <td>{{ $resi->cod == true ? 'Yes' : 'No' }}</td>
                            <td class="">
                                <a href="{{ route('resis.show', $resi->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('resis.edit', $resi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('resis.destroy', $resi->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Tidak ada resi.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection