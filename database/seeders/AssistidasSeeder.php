<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Assistida;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AssistidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assistida::factory()->count(10)->create();
    }
}
