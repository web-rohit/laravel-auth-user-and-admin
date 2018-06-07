
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
        DB::table('users')->insert([
            'name' => str_random(5),
            'email' => 'admin@example.com',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'city' => str_random(6),
            'country_id' => 6,
            'state_id' => 6,
            'admin' => 1,
            'verified' => 1
        ]);
    }
}
