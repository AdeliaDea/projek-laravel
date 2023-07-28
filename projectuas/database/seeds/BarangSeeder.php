<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('barangs')->insert([
                'kode' => Str::random(3),
                'nama_barang' => Str::random(10),
                'harga' => 100000,
            ]);
        }    
    }
}