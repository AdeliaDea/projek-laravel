<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('pelanggans')->insert([
                'nama_pelanggan' => Str::random(10),
                'alamat' => Str::random(20),
            ]);
         }

    }
}