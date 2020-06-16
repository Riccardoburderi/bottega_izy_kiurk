<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@bottega.com',
                'password' => '$2y$10$j/tCDKQphmIuIgPBzp9lBeq97DAIJsKrG8XbE2laifC3ih5WLK3L.',
            )            
        ));
    }
}
