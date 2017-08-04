<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Model\User::class,10)->create()->each(function ($u){
//            $u->posts()->save(factory(App\Post::class)->make());
//        });
        $faker = Faker\Factory::create();
        
        for($i=0; $i<20; $i++){
            DB::table('users')->insert([
            'username' => $faker->name,
            'email' => $faker->freeEmail,
            'fullname'=> $faker->name,
            'password' => bcrypt('abc123'),
        ]);
        }
        
    }
}
