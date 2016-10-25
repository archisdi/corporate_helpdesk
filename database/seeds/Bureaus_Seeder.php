<?php

use Illuminate\Database\Seeder;
use App\Bureau;

class Bureaus_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bureau::create([
        	'name' => 'Information Technology',
        	]);

        Bureau::create([
        	'name' => 'Legal Adviser',
        	]);

        Bureau::create([
        	'name' => 'Human Resource',
        	]);

        Bureau::create([
        	'name' => 'Administration',
        	]);

        Bureau::create([
        	'name' => 'Medical Service',
        	]);

        Bureau::create([
        	'name' => 'Energy Resource',
        	]);

        Bureau::create([
        	'name' => 'Executive Secretariat',
        	]);

        Bureau::create([
        	'name' => 'Budget and Planning',
        	]);

        Bureau::create([
        	'name' => 'Counterterrorism',
        	]);

        Bureau::create([
            'name' => 'Executive',
            ]);
        
    }
}
