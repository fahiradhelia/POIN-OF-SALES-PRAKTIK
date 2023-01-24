@extends('barangs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show Barang</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_barang:</strong>
{{ $barang->nama_barang }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_merek:</strong>
{{ $barang->nama_merek }}
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>nama_distributor:</strong>
    {{ $barang->nama_distributor }}
    </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>harga_barang:</strong>
        {{ $barang->harga_barang }}
        </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>harga_beli:</strong>
            {{ $barang->harga_beli }}
            </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>stok:</strong>
                {{ $barang->stok }}
                </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                 <strong>tgl_masuk:</strong>
                 {{ $barang->tgl_masuk }}
                </div>
                 </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>nama_petugas:</strong>
                        {{ $barang->nama_petugas }}
                        </div>
                        </div>
                        </div>
                        @endsection
