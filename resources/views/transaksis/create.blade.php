@extends('transaksis.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Transaksi</h2>
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
<form action="{{ route('transaksis.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_barang:</strong>
<select name="nama_barang" class="form-control"> 
    <option value=""> Pilih Barang </option> 
        @foreach ($barang as $id) 
        <option value ="{{ $id->nama_barang }}">{{ $id->nama_barang }}</option> 
        @endforeach 
    </select> 
</div>
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>harga_barang:</strong>
    <input type="text" name="harga_barang" class="form-control" placeholder="harga_barang"> 
    </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>total_barang:</strong>
        <input type="number" name="total_barang" class="form-control" placeholder="Total Barang">
        </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>total_harga:</strong>
            <input type="number" min="0"name="total_harga" class="form-control" placeholder="total_harga">
            </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>total_bayar:</strong>
                <input type="number" min="0"name="total_bayar" class="form-control" placeholder="total_bayar">
                </div>
                </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>kembalian:</strong>
                    <input type="number" min="0"name="kembalian" class="form-control" placeholder="kembalian">
                    </div>
                    </div> --}}
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        <strong>tanggal_beli:</strong>
                        <input type="date" name="tanggal_beli" class="form-control" placeholder="tanggal_beli">
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
            </form>
@endsection
