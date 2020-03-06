<?php

use Illuminate\Database\Seeder;

class RolesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
        ]);
        \App\Role::create([
            'name'  => 'Author',
            'slug'  => 'author',
        ]);
    }
}
