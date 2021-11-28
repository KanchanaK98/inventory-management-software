<?php


use Illuminate\Support\Facades\DB;
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
        DB::table('payment_methods')->insert([
            [
                'id' => 1,
                'name' => 'Check',
                'description' => 'This is check option'
            ],
            [
                'id' => 2,
                'name' => 'Cash',
                'description' => 'This is cash option'
            ]

        ]);
    }
}
