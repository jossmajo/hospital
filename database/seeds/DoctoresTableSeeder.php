<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctores')->truncate();

              DB::table('doctores')->insert([
                  [
                  'nombre'=>'Erick',
                  'especialidad'=>'Cardiologo',
                  'telefono'=>'4423456781',
                  'created_at'=>now(),
                  'updated_at'=>now()
              ],
              [
                'nombre'=>'Rosio',
                'especialidad'=>'Terapeuta',
                'telefono'=>'4413456781',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nombre'=>'Carla',
                'especialidad'=>'Psicologo',
                'telefono'=>'4193456781',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nombre'=>'Fran',
                'especialidad'=>'Pediatra',
                'telefono'=>'44546676781',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nombre'=>'Sole',
                'especialidad'=>'Cirujano',
                'telefono'=>'442347851',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            ]) ;
        }
}