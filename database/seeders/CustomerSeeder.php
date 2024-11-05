<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Invoices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(100)
            ->hasInvoices(15)
            ->create();

        Customer::factory()
            ->count(200)
            ->hasInvoices(50)
            ->create();

        Customer::factory()
            ->count(300)
            ->hasInvoices(100)
            ->create();

        Customer::factory()
            ->count(5)
            ->create();
    }
}
