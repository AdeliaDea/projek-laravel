<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable =[
        'tanggal',
        'barang_id',
        'pelanggan_id',
        'jumlah',
        'harga',
        'total'
    ];
}
