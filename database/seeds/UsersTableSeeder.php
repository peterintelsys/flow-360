<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	['name' => 'Peter', 'email' => 'sppaulsson@gmail.com', 'password' =>'qwerty', 'role' => 1, 'client' => 1,'lang' => 'se'],
        	['name' => 'Melvin', 'email' => 'melvin@gmail.com', 'password' =>'qwerty', 'role' => 2, 'client' => 1, 'lang' => 'en'],
        	['name' => 'Wille', 'email' => 'wille@gmail.com', 'password' =>'qwerty', 'role' => 2, 'client' => 1, 'lang' => 'se'],
        	['name' => 'Emilie', 'email' => 'emilie@gmail.com', 'password' =>'qwerty', 'role' => 1, 'client' => 2, 'lang' => 'se'],
        	['name' => 'Melvin', 'email' => 'vito@gmail.com', 'password' =>'qwerty', 'role' => 2, 'client' => 2, 'lang' => 'en'],
        	['name' => 'Wille', 'email' => 'igge@gmail.com', 'password' =>'qwerty', 'role' => 2, 'client' => 2, 'lang' => 'se']
        ];

        foreach ($users as $user) {
        	
        	$newuser = New User;

        	$newuser->name = $user['name'];
        	$newuser->email = $user['email'];
        	$newuser->password = Hash::make($user['password']);
        	$newuser->role_id = $user['role'];
        	$newuser->client_id = $user['client'];
            $newuser->lang = $user['lang'];

        	$newuser->save();
        }
    }
}
