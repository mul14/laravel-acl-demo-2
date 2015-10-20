<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user, and give roles
        $user = App\User::create([
            'name' => 'Super Man',
            'username' => 'super',
            'email' => 'super@example.com',
            'password' => bcrypt('anything_you_want'),

        ])->assignRole('super');

        // ---------------

        $user = App\User::create([
            'name' => 'Annisa',
            'username' => 'annisa',
            'email' => 'annisa@example.com',
            'password' => bcrypt('anything_you_want'),

        ])->assignRole('hrd');

        $user = App\User::create([
            'name' => 'Shabrina',
            'username' => 'shabrina',
            'email' => 'shabrina@example.com',
            'password' => bcrypt('anything_you_want'),

        ])->assignRole('law');

        // ---------------

        $user = App\User::create([
            'name' => 'Ita',
            'username' => 'ita',
            'email' => 'ita@example.com',
            'password' => bcrypt('anything_you_want'),

        ])->assignRole('marketing');

        // ---------------

        $user = App\User::create([
            'name' => 'Reane',
            'username' => 'reane',
            'email' => 'reane@example.com',
            'password' => bcrypt('anything_you_want'),

        ])->assignRole('healthcare');

        // ... Add other user and assign them to roles
    }
}
