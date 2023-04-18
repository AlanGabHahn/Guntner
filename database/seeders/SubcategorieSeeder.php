<?php

namespace Database\Seeders;

use App\Models\Subcategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $subCategories = Subcategorie::factory()->count(20)->create();
    }
}
