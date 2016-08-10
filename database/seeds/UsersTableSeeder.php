<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

            'name' => 'user1',
            'email' => 'user1@dog-ears.net',
            'password' => bcrypt('password'),

            'level' => 100,

            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),

            ],[

            'name' => 'user2',
            'email' => 'user2@dog-ears.net',
            'password' => bcrypt('password'),

            'level' => 10,

            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),

            ],[

            'name' => 'user3',
            'email' => 'user3@dog-ears.net',
            'password' => bcrypt('password'),

            'level' => 1,

            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
