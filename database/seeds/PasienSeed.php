<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeed extends Seeder
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
                'nama' => "budi",
                'alamat' => "jl.ujung berung",
                'no_telpon' => "081264748",
            ),
            array(
                'nama' => "riski",
                'alamat' => "jl.ujung berung",
                'no_telpon' => "081874748",
            ),
        );
        DB::table('pasiens')->insert($data);
    }
}
