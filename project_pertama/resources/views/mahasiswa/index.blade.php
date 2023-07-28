@extends('layouts.master')

@section('title')
    List Data Mahasiswa
@endsection

@section('content')
    <h1 align="center">List Data Mahasiswa</h1>
    <table class="table table-dark table-striped">
        <thead align="center">>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Asal</th>
                <th>Agama</th>
                <th>Alamat Rumah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Adelia A'fa Nafasha</td>
                <td>202002020001</td>
                <td>Sistem Informasi</td>
                <td>Malang</td>
                <td>Islam</td>
                <td>JL Akasia 16A Gg.Narwastu No.7C, Denpasar Timur</td>
                <th>
                    <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>2</td>
                <td>Aubrey Fathia Pelangi</td>
                <td>202002020002</td>
                <td>Sistem Informasi</td>
                <td>Jakarta</td>
                <td>Islam</td>
                <td>JL Danau Beratan no 17B Gg. Mawar, Denpasar Selatan</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>3</td>
                <td>Christina Prerana Naura</td>
                <td>202002020003</td>
                <td>Sistem Informasi</td>
                <td>Lombok</td>
                <td>Kristen</td>
                <td>JL Gunung Sahyang Gg.3 No.1A, Denpasar Barat</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>4</td>
                <td>Caka Radhitya Irfandi</td>
                <td>202002020004</td>
                <td>Sistem Informasi</td>
                <td>Banyuwangi</td>
                <td>Islam</td>
                <td>JL Gunung Tangkuban Perahu No.15A Gg.11, Denpasar Barat</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>5</td>
                <td>Fabian Antoine Yann</td>
                <td>202002020005</td>
                <td>Sistem Informasi</td>
                <td>Kupang</td>
                <td>Katolik</td>
                <td>JL Seroja 23 No.17B Gg.3 Tonja, Denpasar Utara</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>6</td>
                <td>Aaron Ryan</td>
                <td>202002020006</td>
                <td>Sistem Informasi</td>
                <td>Maluku</td>
                <td>Islam</td>
                <td>JL Seroja 35 No.10 Gg.Anggrek Tonja, Denpasar Utara</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>7</td>
                <td>I Dewa Pamungkas Dhefin Adibrata</td>
                <td>202002020010</td>
                <td>Teknik Informatika</td>
                <td>Karang Asem</td>
                <td>Hindu</td>
                <td>JL Gatsu Barat No.50A Gg.B No.9 Denpasar Barat</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>8</td>
                <td>Edric Hugo</td>
                <td>202002020011</td>
                <td>Teknik Informatika</td>
                <td>London</td>
                <td>Katolik</td>
                <td>JL Gatsu Timur No.39A Gg.B No.7 Denpasar Barat</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>9</td>
                <td>Austin Harold</td>
                <td>202002020012</td>
                <td>Teknik Informatika</td>
                <td>Los Angeles</td>
                <td>Budha</td>
                <td>JL Raya Kuta Perumahan Starbucks Apartemen No.35, Badung</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>10</td>
                <td>Dwyne Gracia Arnold</td>
                <td>202002020013</td>
                <td>Teknik Informatika</td>
                <td>Cappadocia</td>
                <td>Islam</td>
                <td>JL Prof Dr. Ida Bagus Mantra No.99x,Ketewel, Gianyar</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>11</td>
                <td>I Ketut Indira Myesha Kirania</td>
                <td>202002020014</td>
                <td>Teknik Informatika</td>
                <td>Subang</td>
                <td>Hindu</td>
                <td>JL Kartika I No. 11a, Dauh Puri, Denpasar Barat</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
            </tr>
            <tr>
                <td>12</td>
                <td>Hyun Ki Almost</td>
                <td>202002020015</td>
                <td>Teknik Informatika</td>
                <td>Busan</td>
                <td>Kristen</td>
                <td>JL Kayu Ara No.12, Seminyak, Kuta Utara, Badung</td>
                <th>
                <a href="{{ route('mahasiswa.edit') }}">Edit</a>
                </th>
        </tbody>
    </table>
@endsection