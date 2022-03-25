<?php

namespace Database\Seeders;

use App\Models\GameManager;
use Illuminate\Database\Seeder;

class GameManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameManager::updateOrCreate(['id' => 1], ['id' => 1, 'current_week' => 1]);
    }
}
