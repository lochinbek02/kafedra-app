<?php

namespace Database\Seeders;

use App\Models\Kafedra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KafedraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kafedra::factory(100)->create();
    }
}
