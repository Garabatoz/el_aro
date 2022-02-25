<?php

namespace Database\Seeders;

use App\Models\Corraluno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CorralunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Corraluno::create
        ([
            'id' => '666',
            'name' => 'Jefferson Paraco',
            'date' => '2012-04-04',
        ]);
        Corraluno::factory(9)->create();
    }
}
