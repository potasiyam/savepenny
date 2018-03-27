<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role comes before User seeder here.
        $this->call(RolesTableSeeder::class);
        // User seeder will use the roles above created.
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
    }
}
