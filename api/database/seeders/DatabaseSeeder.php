<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (!App::isProduction()) {
            $this->call(UserSeeder::class);
        }
        // \App\Models\User::factory(10)->create();
    }
}
