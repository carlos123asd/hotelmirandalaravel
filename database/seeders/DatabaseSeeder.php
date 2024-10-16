<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Activity;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //php artisan migrate:refresh --seed | #restaurar los seeder nuevamente
        User::factory(10)->create();
        Activity::factory(10)->create();
    }
}
