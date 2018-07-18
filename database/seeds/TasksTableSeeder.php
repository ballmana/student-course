<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            \DB::table('tasks')->insert([
                'name' => $faker->domainName,
                'detail' => $faker->text
            ]);
        }
    }
}
