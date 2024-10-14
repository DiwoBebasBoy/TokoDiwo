@extends('layouts.admin.main')
@section('title', 'Admin Edit Distributor')
@section('content')
<div class="main-content">
<section class="section">
<div class="section-header">
<h1>Edit Distributor</h1>
<div class="section-header-breadcrumb">
<div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">
Dashboard</a></div>
<div class="breadcrumb-item active"><a href="{{ route('admin.distributor') }}">Distributor</a></div>
<div class=”breadcrumb-item”>Edit Distributor</div>
</div>
</div>
<a href="{{ route('admin.distributor') }}" class=”btn btn-icon icon-left btn-warning”> Kembali</a>
<div class=”card mt-4”>
<form action="{{ route('distributor.update', $distributor->id) }}"
class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
@csrf
<div class="card-body">
<div class="row">
<div class="col-6">
<div class="form-group">
<label for="nama_distributor">nama_distributor</label>
<input id="nama_distributor" type="text" class="form-control" name="nama_distributor" required="" 
 value="{{ $distributor->nama_distributor }}">
<div class="invalid-feedback">
Kolom ini harus di isi!
</div>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="lokasi"> Lokasi</label>
<input id="lokasi" type="text" class="form-control" name="lokasi" required="" 
 value="{{ $distributor->lokasi }}">
<div class="invalid-feedback">
Kolom ini harus di isi!
</div>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label for="kontak">Kontak Distributor</label>
<input id="kontak" type="number" class="form-control" name="kontak" required="" 
 value="{{ $distributor->kontak }}">
<div class="invalid-feedback">
Kolom ini harus di isi!
</div>
</div>
</div>
<div class="col-12">
<div class="form-group">
<label for="email"> Email Distributor</label>
<textarea class="form-control" name="email" id="email" cols="30" rows="40" 
required="">{{ $distributor->description }}</textarea>
<div class="invalid-feedback">
Isi berita harus di isi!
</div>
</div>
</div>
<div class="col-12">
<div class="form-group">
<div class="custom-file">
<input class="custom-file-input" name="image" id="customFile" type="file">
</div>
</div>
</div>
<button type="submit" class="btn btn-icon icon-left btn-primary">
<i class="fas fa-save"></i> Simpan
</button>
</div>
</form>
</div>
</section>
</div>
@endsection
