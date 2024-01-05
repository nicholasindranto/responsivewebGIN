<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Edit Resi</h2>

        <form action="{{ route('resis.update', $resi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="no_resi" class="form-label">Nomor Resi:</label>
                <input type="text" name="no_resi" class="form-control" value="{{ $resi->no_resi }}" required>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nama_pengirim" class="form-label">Nama Pengirim:</label>
                    <input type="text" name="nama_pengirim" class="form-control" value="{{ $resi->nama_pengirim }}" required>
                </div>
                <div class="col-md-6">
                    <label for="no_tlp_pengirim" class="form-label">Nomor Telepon Pengirim:</label>
                    <input type="tel" name="no_tlp_pengirim" class="form-control" value="{{ $resi->no_tlp_pengirim }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat_pengirim" class="form-label">Alamat Pengirim:</label>
                <textarea name="alamat_pengirim" class="form-control" rows="4" required>{{ $resi->alamat_pengirim }}</textarea>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nama_penerima" class="form-label">Nama Penerima:</label>
                    <input type="text" name="nama_penerima" class="form-control" value="{{ $resi->nama_penerima }}" required>
                </div>
                <div class="col-md-6">
                    <label for="no_tlp_penerima" class="form-label">Nomor Telepon Penerima:</label>
                    <input type="tel" name="no_tlp_penerima" class="form-control" value="{{ $resi->no_tlp_penerima }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat_penerima" class="form-label">Alamat Penerima:</label>
                <textarea name="alamat_penerima" class="form-control" rows="4" required>{{ $resi->alamat_penerima }}</textarea>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <label for="berat" class="form-label">Berat:</label>
                    <input type="number" name="berat" class="form-control" value="{{ $resi->berat }}" required>
                </div>
                <div class="col-md-4">
                    <label for="jml" class="form-label">Jumlah:</label>
                    <input type="number" name="jml" class="form-control" value="{{ $resi->jml }}" required>
                </div>
                <div class="col-md-4">
                    <label for="biaya" class="form-label">Biaya:</label>
                    <input type="number" name="biaya" class="form-control" value="{{ $resi->biaya }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi:</label>
                <input type="text" name="isi" class="form-control" value="{{ $resi->isi }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $resi->tanggal }}" required>
            </div>

            <div class="mb-3">
                <label for="cod" class="form-label">COD:</label>
                <div class="form-check">
                    <input type="radio" name="cod" class="form-check-input" id="cod_yes" value="1" {{ $resi->cod == 1 ? 'checked' : '' }} required>
                    <label class="form-check-label" for="cod_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="cod" class="form-check-input" id="cod_no" value="0" {{ $resi->cod == 0 ? 'checked' : '' }} required>
                    <label class="form-check-label" for="cod_no">No</label>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('resis.index') }}" class="btn btn-secondary">Kembali ke Daftar Resi</a>
            </div>
        </form>
    </div>
@endsection