<?php

use Illuminate\Database\Seeder;
use App\Problem;

class Problems_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Problem::create([
        	'name' => 'Network'
        	]);

        Problem::create([
        	'name' => 'Hardware'
        	]);

        Problem::create([
        	'name' => 'Software'
        	]);

        Problem::create([
        	'name' => 'Infrastructure'
        	]);

        Problem::create([
        	'name' => 'Other'
        	]);
    }
}
