<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 48)->create();
        $jolver = new \App\User();
        $jolver->name = "Jolver Andre Gil Quevedo";
        $jolver->email = "andre@devsstore.net";
        $jolver->password = "Manchita";
        $jolver->remember_token = str_random(10);
        $jolver->save();

        $nestor = new \App\User();;
        $nestor->name = "Nestor Marquez";
        $nestor->email = "nestor@devsstore.net";
        $nestor->password = "Nestor";
        $nestor->remember_token = str_random(10);
        $nestor->save();
    }
}
