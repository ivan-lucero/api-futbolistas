<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FutbolistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
                'nombres' => 'Cristiano',
                'apellidos' => 'Ronaldo',
                'created_at' => SupportCarbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => SupportCarbon::now()->format('Y-m-d H:i:s')
            ]
            ]);
    }
}
