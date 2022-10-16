<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuestionsTableSeeder extends Seeder
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
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png',
            'order' => 1,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png',
            'order' => 2,    
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png',
            'order' => 3,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png',
            'order' => 4,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/6a235aaa10f0bd3ca57871f76907797b.png',
            'order' => 5,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/0b6789cf496fb75191edf1e3a6e05039.png',
            'order' => 6,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/23e698eec548ff20a4f7969ca8823c53.png',
            'order' => 7,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/50a753d151d35f8602d2c3e2790ea6e4.png',
            'order' => 8,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/words/8cad76c39c43e2b651041c6d812ea26e.png',
            'order' => 9,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 1,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/words/34508ddb0789ee73471b9f17977e7c9c.png',
            'order' => 10,
        ];
        DB::table('questions')->insert($param); 
        
        $param = [
            'big_question_id' => 2,
            'image' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/d876208414d51791af9700a0389b988b.png',
            'order' => 1,
        ];
        DB::table('questions')->insert($param); 
        

    }
}
