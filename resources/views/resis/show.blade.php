<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Resi</h2>

        <dl class="row">
            <dt class="col-sm-3">Nomor Resi:</dt>
            <dd class="col-sm-9">{{ $resi->no_resi }}</dd>

            <dt class="col-sm-3">Nama Pengirim:</dt>
            <dd class="col-sm-9">{{ $resi->nama_pengirim }}</dd>

            <dt class="col-sm-3">Alamat Pengirim:</dt>
            <dd class="col-sm-9">{{ $resi->alamat_pengirim }}</dd>

            <dt class="col-sm-3">Nomor Telepon Pengirim:</dt>
            <dd class="col-sm-9">{{ $resi->no_tlp_pengirim }}</dd>

            <dt class="col-sm-3">Nama Penerima:</dt>
            <dd class="col-sm-9">{{ $resi->nama_penerima }}</dd>

            <dt class="col-sm-3">Alamat Penerima:</dt>
            <dd class="col-sm-9">{{ $resi->alamat_penerima }}</dd>

            <dt class="col-sm-3">Nomor Telepon Penerima:</dt>
            <dd class="col-sm-9">{{ $resi->no_tlp_penerima }}</dd>

            <dt class="col-sm-3">Berat:</dt>
            <dd class="col-sm-9">{{ $resi->berat }}</dd>

            <dt class="col-sm-3">Jumlah:</dt>
            <dd class="col-sm-9">{{ $resi->jml }}</dd>

            <dt class="col-sm-3">Biaya:</dt>
            <dd class="col-sm-9">Rp {{ number_format($resi->biaya, 0, ',', '.') }}</dd>

            <dt class="col-sm-3">Isi:</dt>
            <dd class="col-sm-9">{{ $resi->isi }}</dd>

            <dt class="col-sm-3">Tanggal:</dt>
            <dd class="col-sm-9">{{ $resi->tanggal->format('d F Y') }}</dd>

            <dt class="col-sm-3">COD:</dt>
            <dd class="col-sm-9">{{ $resi->cod == true ? 'Yes' : 'No' }}</dd>
        </dl>

        <a href="{{ route('resis.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
