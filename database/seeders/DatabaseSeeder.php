<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Corraluno;
use App\Models\Corraldos;
use App\Models\Parque;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Corraldos::factory(10)->create();
        Parque::factory(10)->create();
    }
}
