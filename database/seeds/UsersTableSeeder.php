<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([

            'name' => 'Super Admin',
            'role_id' => '1',
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([

            'name' => 'author',
            'role_id' => '2',
            'username' => 'author',
            'email' => 'author@blog.com',
            'password' => bcrypt('rootauthor'),
        ]);
    }
}
