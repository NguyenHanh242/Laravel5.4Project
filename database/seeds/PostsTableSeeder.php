<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
        for($i = 0; $i < 20; $i++){
            DB::table('posts')->insert([
                'name' => $faker->text($max=200),
                'preview' => $faker->text($max=200),
                'user_id' => rand(22, 32),
                'time' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'picture' => 'hinh1.jpg',
                'detail' => $faker->text,
            ]);
        }
    }
}
