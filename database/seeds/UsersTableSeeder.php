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
        $user = User::create([
            'name'  =>  'Ngoc Thien',
            'email' =>  'ngocthienk61@gmail.com',
            'password'  =>  bcrypt('123456'),
            'remember_token' => str_random('10'),
        ]);
        $user->roles()->sync([1,1]); // array of role ids
        factory(User::class, 50)->create();
    }
}
