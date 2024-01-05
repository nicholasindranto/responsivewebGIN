@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Tambah Resi Baru</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('resis.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="no_resi" class="form-label">Nomor Resi:</label>
                    <input type="text" name="no_resi" class="form-control" required>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nama_pengirim" class="form-label">Nama Pengirim:</label>
                        <input type="text" name="nama_pengirim" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="no_tlp_pengirim" class="form-label">Nomor Telepon Pengirim:</label>
                        <input type="tel" name="no_tlp_pengirim" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="alamat_pengirim" class="form-label">Alamat Pengirim:</label>
                    <textarea name="alamat_pengirim" class="form-control" rows="4" required></textarea>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nama_penerima" class="form-label">Nama Penerima:</label>
                        <input type="text" name="nama_penerima" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="no_tlp_penerima" class="form-label">Nomor Telepon Penerima:</label>
                        <input type="tel" name="no_tlp_penerima" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="alamat_penerima" class="form-label">Alamat Penerima:</label>
                    <textarea name="alamat_penerima" class="form-control" rows="4" required></textarea>
                </div>

                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="berat" class="form-label">Berat:</label>
                        <input type="number" name="berat" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="jml" class="form-label">Jumlah:</label>
                        <input type="number" name="jml" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="biaya" class="form-label">Biaya:</label>
                        <input type="number" name="biaya" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label">Isi:</label>
                    <input type="text" name="isi" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal:</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="cod" class="form-label">COD:</label>
                    <div class="form-check">
                        <input type="radio" name="cod" class="form-check-input" id="cod_yes" value="1" required>
                        <label class="form-check-label" for="cod_yes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="cod" class="form-check-input" id="cod_no" value="0" required>
                        <label class="form-check-label" for="cod_no">No</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection