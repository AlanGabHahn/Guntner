<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id'   => '1',
                'name' => 'ECOSS',
            ],
            [
                'id'   => '2',
                'name' => 'FCE',
            ],
            [
                'id'   => '3',
                'name' => 'Gerador de Gelo',
            ],
            [
                'id'   => '4',
                'name' => 'Linha Comercial',
            ],
        ]);
    }
}
