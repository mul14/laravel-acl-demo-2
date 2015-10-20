<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();

        // Basic permissions data
        App\Permission::insert([
            ['name' => 'user.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.delete', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.edit', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'quiz.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'quiz.delete', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'quiz.edit', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'user.law.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.law.edit', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.law.delete', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'user.healthcare.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'user.healthcare.edit', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'article.create', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'article.edit', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'article.delete', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'facebook.post', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'twitter.post', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
