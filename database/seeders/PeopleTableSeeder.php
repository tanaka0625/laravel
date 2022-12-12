<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 13,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 14,
        ];
        DB::table('people')->insert($param);
    }
}
