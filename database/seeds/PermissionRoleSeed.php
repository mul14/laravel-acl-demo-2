<?php

use Illuminate\Database\Seeder;

class PermissionRoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add a permissions to a role
        $role = App\Role::where('name', 'super')->first();

        // Manajemen user dan kuis untuk psikotes dan penerimaan karyawan baru.
        $role = App\Role::where('name', 'hrd')->first();
        $role->addPermission('user.create');
        $role->addPermission('user.edit');
        $role->addPermission('user.delete');
        $role->addPermission('quiz.create');
        $role->addPermission('quiz.edit');
        $role->addPermission('quiz.delete');

        // Akses ke informasi hukum dari user.
        $role = App\Role::where('name', 'law')->first();
        $role->addPermission('user.law.create');
        $role->addPermission('user.law.edit');
        $role->addPermission('user.law.delete');

        // Akses ke informasi kesehatan dari user.
        $role = App\Role::where('name', 'healthcare')->first();
        $role->addPermission('user.healthcare.create');
        $role->addPermission('user.healthcare.edit');

        // Bisa buat artikel, post ke facebook dan twitter.
        $role = App\Role::where('name', 'marketing')->first();
        $role->addPermission('article.create');
        $role->addPermission('article.edit');
        $role->addPermission('article.delete');
        $role->addPermission('facebook.post');
        $role->addPermission('twitter.post');


        // ... Add other role permission if necessary
    }
}
