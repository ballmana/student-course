<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            \DB::table('employees')->insert([
                'name' => $faker->name,
                'age' => rand(22, 40),
                'email' => $faker->email,
                'gender' => $faker->randomElement(array('male', 'female')),
                'country' => $faker->country
            ]);
        }
    }
}
