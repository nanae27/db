<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class Violate_listTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('violate_list')->insert([
            'id' => 1,
            'user_id' => 1,
            'post_id' => 1,
            'violate_comment' => 'テスト1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    

        ]);
    }
}
