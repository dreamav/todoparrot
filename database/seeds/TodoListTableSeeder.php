<?php

namespace App;

use App\TodoList;
use Illuminate\Database\Seeder;

class TodoListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 50) as $index) {

            TodoList::create([
                'name' => $faker->sentence(2),
                'note' => $faker->sentence(4),
            ]);

        }

    }
}
