
@extends('barangs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Barang</h2>
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
<form action="{{ route('barangs.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_barang:</strong>
<input type="text" name="nama_barang" class="form-control" placeholder="nama">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_merek:</strong>
<select name="nama_merek" class="form-control">
    <option value=""> Pilih Merek</option>
    @foreach ($nama_merek as $ml)
    <option value ="{{ $ml->nama_merek }}">{{ $ml->nama_merek }}</option>
    @endforeach
</select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>nama_distributor:</strong>
    <select name="nama_distributor" class="form-control">
        <option value=""> Pilih Distributor</option>
        @foreach ($nama_distributor as $id)
        <option value ="{{ $id->nama_distributor }}">{{ $id->nama_distributor }}</option>
        @endforeach
    </select>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>harga_barang:</strong>
        <input type="number"class="form-control" min="0" name="harga_barang" min="0" placeholder="barang">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>harga_beli:</strong>
            <input type="number"class="form-control" min="0"  name="harga_beli" min="0" placeholder="beli">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>stok:</strong>
                <input type="number"class="form-control" min="0"  name="stok" min="0" placeholder="stok">
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>tgl_masuk:</strong>
                    <input type="date" name="tgl_masuk" class="form-control" placeholder="tgl masuk">
                 </div>
                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>nama_petugas:</strong>
                        <input class="form-control"  name="nama_petugas" placeholder="petugas">
                        </div>
                        </div> --}}
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
