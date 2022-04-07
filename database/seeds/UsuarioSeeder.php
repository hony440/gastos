<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'usu_nombre'=>'david',
            'usu_apellido'=>'Siguencia',
            'usu_direccion'=>'Guamani',
            'usu_telefono'=>'0985005027',
            'usu_cedula'=>'1720693769',
            'email'=>'david1@hotmail.com',
            'password'=>bcrypt('12345678'),
            'created_at'=>date('Y-m-d H:i'),

        ]);
    }
}
