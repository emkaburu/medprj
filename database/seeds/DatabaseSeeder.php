<?php

use Illuminate\Database\Seeder;
use App\User;

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
        User::create([
            'name' => 'Eric Kaburu',
            'email' => 'kaburu@test.com',
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'Ernest ',
            'email' => 'ernest@test.com',
            'password' => Hash::make('secret')
        ]);
    }
}
