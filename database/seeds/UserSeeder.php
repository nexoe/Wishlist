<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new \App\User();
      $user->email = 'rasmusnexoe@gmail.com';
      $user->name = 'Rasmus';
      $user->password = \Hash::make('test1234');
      $user->save();
    }
}
