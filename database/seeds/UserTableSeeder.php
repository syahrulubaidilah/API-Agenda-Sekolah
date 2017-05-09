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
        


        // generate dummy data with 100 records using Faker
        factory('App\Domain\Entities\User', 100)->create();

        $users = [
        ['id' => 1, 'name' => 'Hasan', 'email' => 'hasan@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 2, 'name' => 'Mila', 'email' => 'mila@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 3, 'name' => 'Rosita', 'email' => 'rosita@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 4, 'name' => 'Fitri', 'email' => 'fitri@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 5, 'name' => 'Dea', 'email' => 'dea@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 6, 'name' => 'Siwi', 'email' => 'siwi@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 7, 'name' => 'Syahrul', 'email' => 'syahrul@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 8, 'name' => 'Alfira', 'email' => 'alfira@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ['id' => 9, 'name' => 'Edi Santoso', 'email' => 'cyber@gmail.com', 'password' => bcrypt('qwerty'), 'level' => '1', 'position' => 'staf', 'created_at' => \Carbon\Carbon::now()],
        ];
        
        //insert batch
        DB::table('users')->insert($users);
    }
}