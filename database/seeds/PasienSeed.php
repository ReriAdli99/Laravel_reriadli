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
                'rumah_sakit_id' => '1',
                'alamat' => "jl.ujung berung",
                'no_telpon' => "081264748",
            ),
            array(
                'nama' => "riski",
                'rumah_sakit_id' => '2',
                'alamat' => "jl.ujung berung",
                'no_telpon' => "081874748",
            ),
        );
        DB::table('pasiens')->insert($data);
    }
}
