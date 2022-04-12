<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RSSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'nama_rs' => "RS Harapan",
                'alamat' => "jl.ujung berung",
                'email' => "harapan@test.com",
                'telepon' => "0124356",
            ),
            array(
                'nama_rs' => "RS Cinta Kasih",
                'alamat' => "jl.ujung berung",
                'email' => "CK@test.com",
                'telepon' => "02344356",
            ),
        );
        DB::table('rumah__sakit')->insert($data);
    }
}
