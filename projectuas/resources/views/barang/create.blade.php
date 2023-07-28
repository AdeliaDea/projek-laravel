@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h5>Form Tambah Data Barang</h5>
        </div>
        <hr>
        <form action="{{ route('barang.store') }}" method="post">
          @csrf 
    <div class="form-group">
        <label>Kode</label>
        <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode">
        @error('kode')
            <span class="text-danger">{{ $message }}</span>
        @enderror
     </div>
     <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Barang">
        @error('nama_barang')
            <span class="text-danger">{{ $message }}</span>
        @enderror
     </div>
     <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga">
        @error('harga')
            <span class="text-danger">{{ $message }}</span>
        @enderror
     </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    @endsection