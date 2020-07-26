<?php

use App\User;
use Illuminate\Database\Seeder;
use Hash as Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('a');
        $user->save();
    }
}
