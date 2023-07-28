@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h5>Data Barang</h5>
            <a href="{{ route('barang.create') }}" class="btn btn-primary">
                Tambah Barang
            </a>
        </div>
        <hr>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
        @foreach ($barang as $i => $d)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{ $d->kode }}</td>
      <td>{{ $d->nama_barang }}</td>
      <td>{{ $d->harga }}</td>
      <td>
        <a href="{{ route('barang.edit', $d->id) }}" class="btn btn-warning">
        Edit
    </a>
    <a href="{{ route('barang.destroy', $d->id) }}" class="btn btn-danger">
       Hapus
    </tr>
    @endforeach
    </tbody>
</table>
  </tbody>
</table>
    </div>
@endsection