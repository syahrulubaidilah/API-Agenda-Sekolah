<?php


use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate record
        DB::table('activities')->truncate();

        $activities = [
            ['id' => 1, 'name' => 'a', 'description' => 'b', 'date_activity' => '12-4-2017', 'time' => '12.00', 'place' => 'aula', 'participant' => 'all class', 'user_id' => 1, 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'a', 'description' => 'b', 'date_activity' => '12-4-2017', 'time' => '12.00', 'place' => 'aula', 'participant' => 'all class', 'user_id' => 1, 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'a', 'description' => 'b', 'date_activity' => '12-4-2017', 'time' => '12.00', 'place' => 'aula', 'participant' => 'all class', 'user_id' => 1, 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'a', 'description' => 'b', 'date_activity' => '12-4-2017', 'time' => '12.00', 'place' => 'aula', 'participant' => 'all class', 'user_id' => 1, 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'a', 'description' => 'b', 'date_activity' => '12-4-2017', 'time' => '12.00', 'place' => 'aula', 'participant' => 'all class', 'user_id' => 1, 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'a', 'description' => 'b', 'date_activity' => '12-4-2017', 'time' => '12.00', 'place' => 'aula', 'participant' => 'all class', 'user_id' => 1, 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('activities')->insert($activities);
    }
}
