<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => 1,
            'user_id' => 1,
            'episode' => 'サンプル1',
            'del_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        
        ]);
    }
}

