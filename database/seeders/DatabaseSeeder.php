<?php

namespace Database\Seeders;


use App\Models\Customer;
use App\Models\Invoices;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            CustomerSeeder::class,
        ]);
    }
}