<?php

namespace Database\Seeders;

use App\Models\Productline;
use App\Models\Product;
use App\Models\Office;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Order_Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Productline::factory(20)->create();
        Product::factory(40)->create();
        Office::factory(5)->create();
        Employee::factory(20)->create();
        Customer::factory(100)->create();
        Payment::factory(30)->create();
        Order::factory(30)->create();
        Order_Product::factory(100)->create();
    }
}
