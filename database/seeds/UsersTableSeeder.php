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
        // \DB::table('users')->insert(
        //     [
        //     'name' => 'Marcos Vinicius',
        //     'email' => 'mvnpereira@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$12$N53sBcr4Nvn9/8ZctAI36esTj951kVg0XqKQY6X3sfmDui9qa/v/K ',
        //     'remember_token' => 'AV03EUOF8h5i'
        //     ]
        // );
       
        factory(\App\User::class, 40)->create()->each(function($user){
            $user->store()->save(factory(\App\Store::class)->make());
        });
    }
}
