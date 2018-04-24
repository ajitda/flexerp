<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User';
        $role_user->save();

        $role_author = new Role();
        $role_author->name = 'Admin';
        $role_author->description = 'An Admin';
        $role_author->save();

        $role_admin = new Role();
        $role_admin->name = 'Superadmin';
        $role_admin->description = 'A Super Admin';
        $role_admin->save();
    }
}
