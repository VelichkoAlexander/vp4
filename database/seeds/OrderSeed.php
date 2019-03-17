<?php

use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Order::class, 10)->create();

    }
}
