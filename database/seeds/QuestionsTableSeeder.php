<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            ['question_id' => 1, 'question_name' => "Which Degree are you doing?", 'question_description' => "Please select your degree from the options below..."],
            ['question_id' => 2, 'question_name' => "Which module was the company by the name ABC Ltd featured in?", 'question_description' => "select the module you think is the correct answer from the options below"],
            ['question_id' => 3, 'question_name' => "Which of these companies is NOT used by modules in Edge Hill Computer Science Courses?", 'question_description' => "select the company you think is the correct answer from the options below"],
          ]);
    }
}
