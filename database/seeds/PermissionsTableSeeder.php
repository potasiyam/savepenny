<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();
        $permission->name = 'create_user';
        $permission->description = '';
        $permission->save();

        $roles = Role::whereIn('name', ['superadmin', 'admin'])->get();
        $permission->roles()->attach($roles);
    }
}
