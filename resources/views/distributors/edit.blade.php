
@extends('distributors.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Distributor</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('distributors.index') }}"> Back</a>
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
<form action="{{ route('distributors.update',$distributor->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_distributor:</strong>
<input type="text" name="nama_distributor" value="{{ $distributor->nama_distributor }}" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>alamat:</strong>
<textarea class="form-control" style="height:150px" name="alamat" placeholder="Detail">{{ $distributor->alamat }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>no_telp:</strong>
<input type="number" min='0' name="no_telp" value="{{ $distributor->no_telp}}" class="form-control" placeholder="no telp">
    </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
