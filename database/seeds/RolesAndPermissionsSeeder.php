<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        Role::create(['name' => 'user']);
        /** @var \App\User $user */
        $user = factory(\App\User::class)->create([
            'password' => bcrypt('harasyaputra')
        ]);

        $user->assignRole('user');
        Role::create(['name' => 'admin']);

        /** @var \App\User $user */
        $admin = factory(\App\User::class)->create([
            'name' => 'Harasya Putra',
            'email' => 'harasya.email@gmail.com',
            'password' => bcrypt('harasyaputra')
        ]);

        $admin->assignRole('admin');
    }
}
