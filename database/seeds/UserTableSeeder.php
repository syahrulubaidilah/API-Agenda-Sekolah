<?php


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
        // truncate record
        DB::table('users')->truncate();

        $users = [
            ['id' => 1, 'name' => 'Hasan', 'email' => 'Hasan@gmail.com', 'password' => 'Hasan', 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'Mila', 'email' => 'Mila@gmail.com', 'password' => 'Mila', 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'Rosita', 'email' => 'Rosita@gmail.com', 'password' => 'Rosita', 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'Fitri', 'email' => 'Fitri@gmail.com', 'password' => 'Fitri', 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'Dea', 'email' => 'Dea@gmail.com', 'password' => 'Dea', 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'Siwi', 'email' => 'Siwi@gmail.com', 'password' => 'Siwi', 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('users')->insert($users);
    }
}
