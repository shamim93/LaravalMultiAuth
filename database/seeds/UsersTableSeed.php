<?php

use Illuminate\Database\Seeder;
class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'role_id'   =>'1',
            'name'      =>'Admin',
            'username'  =>'shamim104',
            'email'     =>'shahsajib3@gmail.com',
            'password'  =>bcrypt('123456789')
        ]);
        \App\User::create([
            'role_id'   =>'2',
            'name'      =>'Author',
            'username'  =>'sha120',
            'email'     =>'shamimahmed199767@gmail.com',
            'password'  =>bcrypt('1234567')
        ]);
    }
}
