@extends('transaksis.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Transaksi</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('transaksis.update',$transaksi->id) }}" method="POST">
@csrf
@method('PUT')
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_barang:</strong>
<input type="integer" name="nama_barang" value="{{ $transaksi->nama_barang}}" class="form-control" placeholder="Name">
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>harga_barang:</strong>
    <input type="number" min="0" name="harga_barang" value="{{ $transaksi->harga_barang}}" class="form-control" placeholder="Name">
    </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>total_barang:</strong>
        <input type="number" min="0" name="total_barang" value="{{ $transaksi->total_barang}}" class="form-control" placeholder="Name">
        </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>total_harga</strong>
            <input type="number" min="0" name="total_harga" value="{{ $transaksi->total_harga}}" class="form-control" placeholder="Name">
            </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>total_bayar:</strong>
                <input type="number" min="0" name="total_bayar" value="{{ $transaksi->total_bayar}}" class="form-control" placeholder="Name">
                </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>kembalian:</strong>
                    <input type="number" min="0" name="kembalian" value="{{ $transaksi->kembalian}}" class="form-control" placeholder="Name">
                    </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>tanggal_beli:</strong>
                        <input type="date" name="tanggal_beli" value="{{ $transaksi->tanggal_beli}}" class="form-control" placeholder="Name">
                        </div>
                        </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
