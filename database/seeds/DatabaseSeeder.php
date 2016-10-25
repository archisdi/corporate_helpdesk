<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
	    $this->call(UsersTableSeeder::class);
	    
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    Model::unguard();

    $this->call(Bureaus_Seeder::class);
    $this->call(Users_Seeder::class);
    $this->call(Problems_Seeder::class);
    $this->call(Tickets_Seeder::class);
    $this->call(Status_Seeder::class);
    

    Model::reguard();

    }
}