<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $testclients = factory(App\Customer::class, 30)->create();
        $testclient1 = factory(App\Customer::class, 30)->create(['client_id' => 1])
        ->each(function ($u) {
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
                $u->orders()->save(factory(App\Order::class)->make());
            });
    }
}
