<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Pixel38',
            'email'=>'pixel38@mail.com',
            'password'=>bcrypt('secret')
        ]);

        $faker=\Faker\Factory::create();
        for($i=1;$i<=10;$i++)
        {
            $user =new User([   
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>bcrypt('password')
            ]);
            $user->save();
        }
    }
}
