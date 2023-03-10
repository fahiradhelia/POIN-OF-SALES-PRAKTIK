@extends('transaksis.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show Transaksi</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_barang:</strong>
{{ $transaksi->nama_barang }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>harga_barang:</strong>
{{ $transaksi->harga_barang }}
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>total_barang:</strong>
    {{ $transaksi->total_barang }}
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>total_harga:</strong>
        {{ $transaksi->total_harga }}
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>total_bayar:</strong>
            {{ $transaksi->total_bayar }}
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>kembalian:</strong>
                {{ $transaksi->kembalian }}
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>tanggal_belil:</strong>
                    {{ $transaksi->tanggal_beli }}
                    </div>
                    </div>
@endsection
