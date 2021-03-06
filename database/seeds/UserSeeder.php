<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hendrawan',
            'email' => 'hendrawan@mail.com',
            'password' => Hash::make('hendrawan'),
            'role_id' => 1
        ]);
    }
}
