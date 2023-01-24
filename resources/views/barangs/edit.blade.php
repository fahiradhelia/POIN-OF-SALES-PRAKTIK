
@extends('barangs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Barang</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
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
<form action="{{ route('barangs.update', $barang->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_barang:</strong>
<input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_merek:</strong>
<input type="string"  name="nama_merek" value="{{ $barang->nama_merek}}" class="form-control" placeholder="nama_merek">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>nama_distributor:</strong>
    <input type="string"  name="nama_distributor" value="{{ $barang->nama_distributor}}" class="form-control" placeholder="nama_distributor">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>harga_barang:</strong>
        <input type="number" min='0' name="harga_barang" value="{{ $barang->harga_barang}}" class="form-control" placeholder="harga_barang">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>stok:</strong>
            <input type="number" min='0' name="stok" value="{{ $barang->stok}}" class="form-control" placeholder="stok">
            </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>harga_beli:</strong>
            <input type="number" min='0' name="harga_beli" value="{{ $barang->harga_beli}}" class="form-control" placeholder="harga_beli">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>tgl_masuk:</strong>
                <input type="date" name="tgl_masuk" value="{{ $barang->tgl_masuk }}" class="form-control" placeholder="Name">
                </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>nama_petugas:</strong>
                    <textarea class="form-control" name="nama_petugas" placeholder="nama_petugas">{{ $barang->nama_petugas }}</textarea>
                    </div>
                    </div> --}}
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
