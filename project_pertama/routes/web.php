<?php

//View -> Route -> Controller ->View

//View -> Route -> Profil ->View
Route::get('/profil', 'MahasiswaController@profil')->name('profil');

// route list data mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');

// route tambah data mahasiswa
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');

//route edit data mahasiswa
Route::get('/mahasiswa/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');