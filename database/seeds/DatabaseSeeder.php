<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@gmail.com',
                'password'       => '$2y$10$VOunUZVMv4bwC84FJngVdORh/3WOQsLYXcHOTcmsVFWTVWWg.V8/i',
            ],
            [
                'id'             => 2,
                'name'           => 'Moderator1',
                'email'          => 'moderator@gmail.com',
                'password'       => '$2y$10$VOunUZVMv4bwC84FJngVdORh/3WOQsLYXcHOTcmsVFWTVWWg.V8/i',
            ]
        ];

        User::insert($user);
        $roles = [
            [
                'id'             => 1,
                'slug'             => 'admin',
                'name'             => 'admin',
            ],
            [
                'id'             => 2,
                'slug'             => 'moderator',
                'name'             => 'moderator',
            ]
        ];

        Role::insert($roles);
        DB::insert('insert into role_users (user_id , role_id ) values (?, ?)', [1, 1]);
        DB::insert('insert into role_users (user_id , role_id ) values (?, ?)', [2, 2]);
    }
}
