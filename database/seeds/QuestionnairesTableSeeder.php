<?php

use Illuminate\Database\Seeder;

class QuestionnairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaires')->insert([
            ['questionnaire_id' => 1, 'questionnaire_name' => "Edge Hill University Course Questionnaire", 'questionnaire_description' => "Take this short questionnaire to test your knowledge on your course at Edge Hill University!"],
            ['questionnaire_id' => 2, 'questionnaire_name' => "questionnaire 2", 'questionnaire_description' => "2"],
            ['questionnaire_id' => 3, 'questionnaire_name' => "questionnaire 3", 'questionnaire_description' => "3"],
          ]);
    }
}
