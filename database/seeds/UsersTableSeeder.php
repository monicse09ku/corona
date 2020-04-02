<?php

use Illuminate\Database\Seeder;

use App\User;
use Webpatser\Uuid\Uuid;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();

    	$users = [
            [
                'name' => 'Super Admin',
                'email' => 'super-admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456'), // password
                'remember_token' => Str::random(10),
                'role' => 'super_admin',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456'), // password
                'remember_token' => Str::random(10),
                'role' => 'admin',
            ],
            [
                'name' => 'Donor',
                'email' => 'donor@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456'), // password
                'remember_token' => Str::random(10),
                'role' => 'donor',
            ],
            [
                'name' => 'Informer',
                'email' => 'informer@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456'), // password
                'remember_token' => Str::random(10),
                'role' => 'informer',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
