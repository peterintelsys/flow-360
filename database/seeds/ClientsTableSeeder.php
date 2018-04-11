<?php

use Illuminate\Database\Seeder;

use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
        	['name' => 'Flow', 'orgnbr' =>'556554-3450'],
        	['name' => 'EEC', 'orgnbr' =>'553552-3454']
        ];

        foreach ($clients as $client) {
        	
        	$newclient = New Client;

        	$newclient->name = $client['name'];
        	$newclient->orgnbr = $client['orgnbr'];

        	$newclient->save();
        }

        $testclients = factory(App\Client::class, 30)->create()
        ->each(function ($u) {
                $u->users()->save(factory(App\User::class)->make());
                $u->users()->save(factory(App\User::class)->make());
                $u->users()->save(factory(App\User::class)->make());
                $u->users()->save(factory(App\User::class)->make());
                $u->users()->save(factory(App\User::class)->make());
            });
    }
}
