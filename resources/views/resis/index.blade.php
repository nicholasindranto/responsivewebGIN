<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-3">Daftar Resi</h2>

        <a href="{{ route('resis.create') }}" class="btn btn-primary mb-3">Create</a>

        <!-- Form untuk pencarian -->
        <form action="{{ route('resis.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input id="cariSearch" type="text" name="search" class="form-control" placeholder="Cari Nomor Resi" value="{{ request('search') }}">
            </div>

            <!-- Dropdown untuk memilih bulan -->
            <div class="form-group mt-3">
                <label for="month">Filter by Month:</label>
                <select name="month" id="month" class="form-control" onchange="this.form.submit()">
                    <option value="all" {{ request('month') == 'all' ? 'selected' : '' }}>All Months</option>
                    @foreach(range(1, 12) as $month)
                        <option value="{{ $month }}" {{ request('month') == $month ? 'selected' : '' }}>
                            {{ \Carbon\Carbon::create(null, $month, 1)->format('F') }}
                        </option>
                    @endforeach
                </select>
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

        <!-- Menampilkan link pagination -->
        <div class="d-flex justify-content-center">
            {{ $resis->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <script>
        // JavaScript untuk mengirimkan formulir ketika memilih bulan pada dropdown
        document.getElementById('month').addEventListener('change', function() {
            this.form.submit();
        });

        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('cariSearch');
            const tableBody = document.querySelector('tbody');

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.toLowerCase();

                // Menghapus semua baris tabel kecuali header
                while (tableBody.firstChild) {
                    tableBody.removeChild(tableBody.firstChild);
                }

                // Filter resis berdasarkan kriteria pencarian dan tampilkan kembali
                @foreach($resis as $resi)
                    if ("{{ strtolower($resi->no_resi) }}".includes(searchTerm)) {
                        const row = document.createElement('tr');
                        row.innerHTML = `
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
                        `;
                        tableBody.appendChild(row);
                    }
                @endforeach
            });
        });
    </script>
@endsection