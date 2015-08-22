<?php

use App\Category;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userList = [
            [
                'name' => 'test guy',
                'email' => 'test@testemail.com',
                'account_type' => 'clinician',
                'password' => 'testtest',
            ]
        ];

        foreach ($userList as $user) {

            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'account_type' => $user['account_type'],
                'password' => bcrypt($user['password']),
            ]);
        }
    }
}
