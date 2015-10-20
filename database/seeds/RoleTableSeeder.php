<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();

        // Basic roles data
        App\Role::insert([
            ['name' => 'super', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'hrd', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'law', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'marketing', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'healthcare', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
