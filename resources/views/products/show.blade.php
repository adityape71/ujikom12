@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $product->tanggal }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $product->nama }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Instansi</label>
            <input type="text" name="instansi" class="form-control" placeholder="Instansi/lembaga" value="{{ $product->instansi }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tujuan</label>
            <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ $product->tujuan }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No Telepon</label>
            <input type="num" name="no_telepon" class="form-control" placeholder="No Telepon" value="{{ $product->no_telepon }}" readonly>
        </div>
        
    </div>
    

@endsection