@extends('layouts.master')

@section('title')
    List Data Mahasiswa
@endsection

@section('content')
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PROFIL PEMBUAT - ADELIA A'FA NAFASHA</title>
    <style>
      body {
        background-color: #e8e8e8;
      }
      
      .kartu {
        width: 800px;
        margin: 0 auto;
        margin-top: 70px;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
    transition: all .3s;
           background-color: #591869;
    border: solid 8px #ea92ff;
    border-top-right-radius: 80px;
    border-bottom-left-radius: 80px;
      } 
      .kartu:hover {
        background-color: #1f8a45;
        border: solid 8px #4fd47e;
        border-top-left-radius: 80px;
    border-bottom-right-radius: 80px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
      }
      .foto {
            padding: 20px;
    margin-left: 30px;
    margin-top: 10px;
      }
      tbody {
    font-size: 20px;
    font-weight: 300;
    color:white;
}
.biodata {
    margin-top: 30px;
}
    </style>
  </head>
  <body>
        <h1 class="text-center text-success mt-3">PROFIL PEMBUAT - ADELIA A'FA NAFASHA</h3></a>
        <!-- Isi Biodata Paling Keren di HTML disini -->
<div class="container">
  <div class="card kartu">
    <div class="row">
      <div class="col-md-4">
      <div class="foto">
        <img src="img/Dea.png.png" img class="Dea.png-thumbnail" alt="" width="150" height="auto">
      </div>
      </div>
      <div class="col-md-8 kertas-biodata">
        <div class="biodata">
        <table width="100%" border="0">
    <tbody><tr>
        <td valign="top">
        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
          <tbody>
            <tr>
              <td width="25%" valign="top" class="textt">Nama</td>
                <td width="2%">:</td>
                <td style="color: #e9a7f9; font-weight:bold">ADELIA A'FA NAFASHA</td>
            </tr>
          <tr>
              <td class="textt">Jenis Kelamin</td>
                <td>:</td>
                <td>Perempuan</td>
            </tr>
          <tr>
              <td class="textt">Tempat Lahir</td>
                <td>:</td>
                <td>Denpasar</td>
            </tr>
          <tr>
              <td class="textt">Fakultas</td>
                <td>:</td>
                <td>Teknik & Informatika</td>
            </tr>
          <tr>
              <td valign="top" class="textt">Prodi</td>
                <td valign="top">:</td>
                <td>Sistem Informasi</td>
            </tr>
        <tr>
              <td valign="top" class="textt">Kampus</td>
                <td valign="top">:</td>
                <td>Universitas PGRI Mahadewa Indonesia</td>
                
            </tr>
            <tr>
            </tr>
            <tr>
              <td valign="top" class="textt">Instagram</td>
                <td valign="top">:</td>
                <td>adeliaa_explore</td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </tbody></table>
  </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>

@endsection