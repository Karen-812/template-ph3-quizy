<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PeopleTableSeeder::class);
        // $this->call(TokyoTableSeeder::class);
        $this->call(BigQuestionsSeeder::class);
        $this->call(ChoicesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
    }
}
