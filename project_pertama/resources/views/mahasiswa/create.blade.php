@extends('layouts.master')

@section('title')
    Create Data Mahasiswa
@endsection

@section('content')
<div class="container-fluid"> 
   <div class="col-md-6"> 

    <h1>Create Data Mahasiswa</h1>
    <form>
  <div class="mb-3">
    <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
    <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
  </div>
    </div>
  <div class="col-md-6">
  <div class="mb-3">
    <label for="Nim" class="form-label">Nim</label>
    <input type="Nim" class="form-control" id="Nim">
  </div>
</div>
<div class="col-md-6">
<div class="mb-3">
<label for="Prodi" class="form-label">Prodi</label>
<select class="form-select" aria-label="Default select example">
  <option value="1">Sistem Informasi</option>
  <option value="2">Teknik Informatika</option>
 </div>
</div>
<div class="col-md-6">
<div class="mb-3">
  <label for="JenisKelamin" class="form-label">JenisKelamin</label>
  <select class="JenisKelamin" class="form-control" id="JenisKelamin">
</div>
</div>
<div class="col-md-6">
  <div class="mb-3">
    <label for="Asal" class="form-label">Asal</label>
    <input type="Asal" class="form-control" id="Asal">
  </div>
</div>
<div class="col-md-6">
  <div class="mb-3">
    <label for="Agama" class="form-label">Agama</label>
    <input type="Agama" class="form-control" id="Agama">
  </div>
</div>
<div class="col-md-6">
  <div class="mb-3">
    <label for="Alamat Rumah" class="form-label">Alamat Rumah</label>
    <input type="Alamat Rumah" class="form-control" id="Alamat Rumah">
  </div>
</div>
    <div class="col-md-6">
  <div class="mb-3">
  <div class="mb-3 form-check">
    <input type="checkbox" class="data sudah valid" id="data sudah valid">
    <label class="form-check-label" for="data sudah valid">data sudah valid</label>
  </div>
  </div>
  <button type="save" class="btn btn-primary">Save</button>
</form>
<br>
<br>
</div>
            </body>
        </table>
    </form>
@endsection