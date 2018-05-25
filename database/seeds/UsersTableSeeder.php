<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // tạo 1 record theo ý mình
        User::create([
            'name'  =>  'Henry Chung',
            'email' =>  'chungthehao@gmail.com',
            'password'  =>  bcrypt('123456'),
            'remember_token' => str_random('10'),
        ]);
        factory(User::class, 50)->create();
    }
}
