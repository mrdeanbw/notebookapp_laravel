<?php

use Illuminate\Database\Seeder;

class NotebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notebooks')->insert([
            'name' => 'Database Notebook'
        ]);
        
        DB::table('notebooks')->insert([
            'name' => 'Second One'
        ]);
    }
}
