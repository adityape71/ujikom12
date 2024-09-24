@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="{{ route('BukuTamu.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Instansi\Lembaga</label>
                <input type="text" name="instansi/lembaga" class="form-control" placeholder="Instansi\Lemabaga" value="{{ $product->instansi }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tujuan</label>
                <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ $product->tujuan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">No Telpon</label>
                <input type="num" name="no_telepon" class="form-control" placeholder="No Telpon" value="{{ $product->no_telepon }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Perbarui</button>
            </div>
        </div>
    </form>
@endsection