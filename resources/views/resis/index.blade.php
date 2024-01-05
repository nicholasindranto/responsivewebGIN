<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Daftar Resi</h2>

        <a href="{{ route('resis.create') }}" class="btn btn-primary mb-3">Tambah Resi Baru</a>

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
                            <td>
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