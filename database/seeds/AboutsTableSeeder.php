<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        DB::table('abouts')->insert([
            'preview' => $faker->text($max=200),
            'detail' => $faker->text,
        ]);
    }
}
