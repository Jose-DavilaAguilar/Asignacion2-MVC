<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveles = ['PRIMERO', 'SEGUNDO', 'TERCERO'];

        foreach($niveles as $nivel){
            DB::table('niveles')->insert([
                'nombre' =>$nivel
            ]);
        }
    }
}
