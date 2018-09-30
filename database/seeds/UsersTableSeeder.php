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
        DB::table('users')->insert([
            'name' => 'Fivehundreth',
            'email' => 'admin@admin.com',
            'password' => bcrypt('cd3e2b14'),
            'role' => 'admin'
        ]);

        factory(App\User::class, 50)->create();
    }
}
