<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::where('name', 'superadmin')->first();        
        $user = new User();
        $user->name = 'Employee Name';
        $user->email = 'superadmin@savepenny.com';
        $user->password = bcrypt('pass1234');
        $user->save();
        $user->roles()->attach($superadmin);

        $admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->name = 'Manager Name';
        $user->email = 'admin@savepenny.com';
        $user->password = bcrypt('pass1234');
        $user->save();
        $user->roles()->attach($admin);
        
        $owner = Role::where('name', 'owner')->first();        
        $user = new User();
        $user->name = 'Employee Name';
        $user->email = 'owner@savepenny.com';
        $user->password = bcrypt('pass1234');
        $user->save();
        $user->roles()->attach($owner);

        $customer = Role::where('name', 'customer')->first();
        $user = new User();
        $user->name = 'Manager Name';
        $user->email = 'customer@savepenny.com';
        $user->password = bcrypt('pass1234');
        $user->save();
        $user->roles()->attach($customer);
    }
}
