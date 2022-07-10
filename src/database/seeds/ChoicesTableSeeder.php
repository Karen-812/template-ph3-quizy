<?php

use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'big_question_id' => 1,
            'question_id' => 1,
            'choices' => 'こうわ',
            'is_correct' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'big_question_id' => 1,
            'question_id' => 1,
            'choices' => 'たかわ',
            'is_correct' => 0,
        ];
        DB::table('choices')->insert($param); 

        $param = [
            'big_question_id' => 1,
            'question_id' => 1,
            'choices' => 'たかなわ',
            'is_correct' => 1,
        ];
        DB::table('choices')->insert($param); 

        $param = [
            'big_question_id' => 1,
            'question_id' => 2,
            'choices' => 'かめと',
            'is_correct' => 0,
        ];
        DB::table('choices')->insert($param);

        $param = [
            'big_question_id' => 1,
            'question_id' => 2,
            'choices' => 'かめど',
            'is_correct' => 0,
        ];
        DB::table('choices')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'question_id' => 2,
            'choices' => 'かめいど',
            'is_correct' => 1,
        ];
        DB::table('choices')->insert($param); 
        
        $param = [
            'big_question_id' => 2,
            'question_id' => 1,
            'choices' => 'むこうひら',
            'is_correct' => 0,
        ];
        DB::table('choices')->insert($param); 
        
        $param = [
            'big_question_id' => 2,
            'question_id' => 1,
            'choices' => 'むきひら',
            'is_correct' => 0,
        ];
        DB::table('choices')->insert($param); 

        $param = [
            'big_question_id' => 2,
            'question_id' => 1,
            'choices' => 'むかいなだ',
            'is_correct' => 1,
        ];
        DB::table('choices')->insert($param); 


    }
}
