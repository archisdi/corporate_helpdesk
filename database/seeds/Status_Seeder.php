<?php

use Illuminate\Database\Seeder;
use App\Status;

class Status_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
        	'name' => 'Waiting approval',
            'color' => 'aqua',
        	]);

        Status::create([
        	'name' => 'Waiting to be processed',
            'color' => 'blue',
        	]);

        Status::create([
        	'name' => 'Not Valid',
            'color' => 'yellow',
        	]);

        Status::create([
        	'name' => 'On process',
            'color' => 'orange',
        	]);

        Status::create([
        	'name' => 'Waiting confirmation',
            'color' => 'yellow',
        	]);

        Status::create([
            'name' => 'Confirmation denied',
            'color' => 'purple',
            ]);

        Status::create([
        	'name' => 'Closed',
            'color' => 'green',
        	]);

        
    }
}
