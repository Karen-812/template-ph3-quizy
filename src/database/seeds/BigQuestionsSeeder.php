<?php

use Illuminate\Database\Seeder;

class BigQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '東京の難読地名クイズ'
        ];
        DB::table('big_questions')->insert($param); // レコードをいくつか作成
        
        $param = [
            'name' => '広島県の難読地名クイズ'
        ];
        DB::table('big_questions')->insert($param); // レコードをいくつか作成

    }
}
