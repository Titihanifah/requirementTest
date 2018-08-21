<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make data dummy from seeder

        DB::table('transactions')->insert([
            'description' => "lorem ipsum 1",
            'category' => 'income' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 2",
            'category' => 'expense' ,
            'date_paid' => '2018-08-22',
            'name' => 'lorem ipsum 2',
            'nominal' => 300000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 3",
            'category' => 'income' ,
            'date_paid' => '2018-08-11',
            'name' => 'lorem ipsum 3',
            'nominal' => 250000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 4",
            'category' => 'income' ,
            'date_paid' => '2018-08-23',
            'name' => 'lorem ipsum 4',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 5",
            'category' => 'income' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 5',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 6",
            'category' => 'income' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 6',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 7",
            'category' => 'income' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 7',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 8",
            'category' => 'income' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 8',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 9",
            'category' => 'expense' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 9',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 10",
            'category' => 'income' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 10',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 11",
            'category' => 'expense' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 11',
            'nominal' => 200000
        ]);
        DB::table('transactions')->insert([
            'description' => "lorem ipsum 12",
            'category' => 'expense' ,
            'date_paid' => '2018-08-21',
            'name' => 'lorem ipsum 12',
            'nominal' => 200000
        ]);


    }
}
