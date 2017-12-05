<?php

use Illuminate\Database\Seeder;
use App\User;

class Users_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Archie Isdiningrat',
            'username' => 'archisdiningrat',
            'birth' => '1995-11-21',
            'gender' => 'male',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'archisdiningrat.jpg',
            'role' => 'operator',
            'email' => 'archie.isdiningrat@gmail.com',
            'password' => bcrypt('becauseofyou'),
        ]);

        User::create([
            'name' => 'Edwina Anky Parande',
            'username' => 'edwinanki',
            'birth' => '1996-04-27',
            'gender' => 'female',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Manager',
            'est' => '2017',
            'img' => 'edwina.png',
            'role' => 'operator',
            'email' => 'edwina.ankyparande@gmail.com',
            'password' => bcrypt('edwinanki'),
        ]);

    	User::create([
    		'name' => 'Bunga Dwipa',
    		'username' => 'bungadwipa',
    		'birth' => '1997-05-07',
    		'gender' => 'female',
    		'address' => 'Telkom University Bandung',
    		'bureau_id' => '1',
    		'position' => 'Manager Assistant',
    		'est' => '2013',
    		'img' => 'bungadwipa.jpg',
    		'role' => 'operator',
    		'email' => 'bungadwipa@gmail.com',
    		'password' => bcrypt('bungdwip'),
    		]);

        User::create([
            'name' => 'Vicha Octavia',
            'username' => 'vichaoctavia',
            'birth' => '1996-10-14',
            'gender' => 'female',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2014',
            'img' => 'vichaoctavia.jpg',
            'role' => 'operator',
            'email' => 'octaviavicha@yahoo.com',
            'password' => bcrypt('vichaoctavia'),
            ]);

        User::create([
            'name' => 'Elrizky Mardhi',
            'username' => 'elrizky',
            'birth' => '1995-10-25',
            'gender' => 'male',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2013',
            'img' => 'elrizky.jpg',
            'role' => 'it',
            'email' => 'elrizkimardhi@gmail.com',
            'password' => bcrypt('elrizky'),
        ]);

        User::create([
            'name' => 'Hafizha Fauzani',
            'username' => 'hafizha',
            'birth' => '1996-12-12',
            'gender' => 'female',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2013',
            'img' => 'hafizha.png',
            'role' => 'it',
            'email' => 'hafizha@gmail.com',
            'password' => bcrypt('hafizha'),
        ]);

        User::create([
            'name' => 'Nira Sarafina',
            'username' => 'nirasarafina',
            'birth' => '1996-12-12',
            'gender' => 'female',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2017',
            'img' => 'nira.jpg',
            'role' => 'it',
            'email' => 'nirasarafina@gmail.com',
            'password' => bcrypt('nirasarafina'),
        ]);

    	User::create([
    		'name' => 'Faisal Nuqobasidqy',
    		'username' => 'faisalnuq',
    		'birth' => '1995-12-07',
    		'gender' => 'male',
    		'address' => 'Telkom University Bandung',
    		'bureau_id' => '1',
    		'position' => 'Staff',
    		'est' => '2013',
    		'img' => 'faisalnuq.jpg',
    		'role' => 'it',
    		'email' => 'faisalnuqobasidqy12@gmail.com',
    		'password' => bcrypt('faisalnuq'),
    		]);

        User::create([
            'name' => 'Wahyu Kurniawan',
            'username' => 'wahyukur',
            'birth' => '1995-11-30',
            'gender' => 'male',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2013',
            'img' => 'wahyukur.jpg',
            'role' => 'it',
            'email' => 'wahyuawankurniawan@gmail.com',
            'password' => bcrypt('wahyukur'),
            ]);

        User::create([
            'name' => 'Ghassan Amanullah',
            'username' => 'gacan',
            'birth' => '1995-01-31',
            'gender' => 'male',
            'address' => 'Prologos',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2013',
            'img' => 'gacan.jpg',
            'role' => 'it',
            'email' => 'ga_wijaya@gmail.com',
            'password' => bcrypt('gacanaman'),
            ]);

        User::create([
            'name' => 'Hafidz Ali',
            'username' => 'hafidz',
            'birth' => '1995-08-20',
            'gender' => 'male',
            'address' => 'Gg.Paedo',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2013',
            'img' => 'hafidz.jpg',
            'role' => 'it',
            'email' => 'hafidzalimaulana@gmail.com',
            'password' => bcrypt('hafidzali'),
            ]);

        User::create([
            'name' => 'Adfal Riawan',
            'username' => 'adfalriawan',
            'birth' => '1995-01-08',
            'gender' => 'male',
            'address' => 'Telkom University Bandung',
            'bureau_id' => '1',
            'position' => 'Staff',
            'est' => '2013',
            'img' => 'adfal.jpg',
            'role' => 'it',
            'email' => 'adfalriawan@gmail.com',
            'password' => bcrypt('adfalriawan'),
            ]);

        User::create([
            'name' => 'Fadhlurahman Irwan',
            'username' => 'fadhlurahman',
            'birth' => '1995-12-03',
            'gender' => 'male',
            'address' => 'Jln.Sukabirus Gg.Rd.shaleh no.19',
            'bureau_id' => '3',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'Fadhlurahman.jpg',
            'role' => 'employee',
            'email' => 'fadhloe@gmail.com',
            'password' => bcrypt('yura0210'),
            ]);

        User::create([
            'name' => 'Imas Nur Tiarani',
            'username' => 'imasnurtiarani',
            'birth' => '1995-08-06',
            'gender' => 'female',
            'address' => 'Jln.Sukabirus Gg.Rd.shaleh no.15',
            'bureau_id' => '2',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'imasnurtiarani.jpg',
            'role' => 'employee',
            'email' => 'imasnurtiarani@gmail.com',
            'password' => bcrypt('imasnurtiarani'),
            ]);

        User::create([
            'name' => 'Rini Wahyuni Tahir',
            'username' => 'riniwahyunit',
            'birth' => '1995-06-13',
            'gender' => 'female',
            'address' => 'Perumahan Permata Buah Batu no.e43',
            'bureau_id' => '5',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'riniwahyunit.jpg',
            'role' => 'employee',
            'email' => 'riniwahyunit@gmail.com',
            'password' => bcrypt('riniwahyunit'),
            ]);

        User::create([
            'name' => 'Fifinella Rahma',
            'username' => 'fifinella',
            'birth' => '1995-06-13',
            'gender' => 'female',
            'address' => 'Elfiana House',
            'bureau_id' => '9',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'fifinella.jpg',
            'role' => 'employee',
            'email' => 'fifinellar9@gmail.com',
            'password' => bcrypt('fifinella'),
            ]);

        User::create([
            'name' => 'Maya Budi Rahayu',
            'username' => 'mayabr',
            'birth' => '1994-05-30',
            'gender' => 'female',
            'address' => 'Kantin Asrama',
            'bureau_id' => '8',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'mayabr.jpg',
            'role' => 'employee',
            'email' => 'mayabudir@gmail.com',
            'password' => bcrypt('mayabr'),
            ]);

        User::create([
            'name' => 'Luthfi Fadil',
            'username' => 'infigare',
            'birth' => '1995-11-29',
            'gender' => 'male',
            'address' => 'Prologos',
            'bureau_id' => '7',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'infigare.jpg',
            'role' => 'employee',
            'email' => 'luthfifadilalamin@gmail.com',
            'password' => bcrypt('infigare'),
            ]);

        User::create([
            'name' => 'Ananda Bayu Putra',
            'username' => 'mrrobo',
            'birth' => '1995-08-09',
            'gender' => 'male',
            'address' => 'Batununggal',
            'bureau_id' => '9',
            'position' => 'Asistant Manager',
            'est' => '2013',
            'img' => 'mrrobo.jpg',
            'role' => 'employee',
            'email' => 'anandabayuputra@gmail.com',
            'password' => bcrypt('hackerman'),
            ]);

        User::create([
            'name' => 'Mochamad Arif Hidayat',
            'username' => 'mocharif',
            'birth' => '1996-10-01',
            'gender' => 'male',
            'address' => 'Palm House',
            'bureau_id' => '6',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'mocharif.jpg',
            'role' => 'employee',
            'email' => 'mocharifhidayat01@gmail.com',
            'password' => bcrypt('mocharif'),
            ]);

        User::create([
            'name' => 'Shalahudin Al Ayubi',
            'username' => 'ayubial',
            'birth' => '1994-12-20',
            'gender' => 'male',
            'address' => 'Pavilion 18',
            'bureau_id' => '5',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'ayubial.jpg',
            'role' => 'employee',
            'email' => 'shalahudin.al.ayubi@gmail.com',
            'password' => bcrypt('ayubial'),
            ]);

        User::create([
            'name' => 'William Roridande',
            'username' => 'roridande',
            'birth' => '1995-01-28',
            'gender' => 'male',
            'address' => 'Wisma sukapura',
            'bureau_id' => '4',
            'position' => 'Manager',
            'est' => '2013',
            'img' => 'roridande.jpg',
            'role' => 'employee',
            'email' => 'roridande@gmail.com',
            'password' => bcrypt('roridande'),
            ]);

        User::create([
            'name' => 'Danang Junaedi',
            'username' => 'danangjunaedi',
            'birth' => '1982-01-01',
            'gender' => 'male',
            'address' => 'Bandung',
            'bureau_id' => '10',
            'position' => 'CEO',
            'est' => '2000',
            'img' => 'danangjunaedi.jpg',
            'role' => 'employee',
            'email' => 'danangjunaedi@gmail.com',
            'password' => bcrypt('danangjunaedi'),
        ]);

        User::create([
            'name' => 'lanny Septiany',
            'username' => 'lanny',
            'birth' => '1995-01-28',
            'gender' => 'female',
            'address' => 'Bandung',
            'bureau_id' => '5',
            'position' => 'Manager',
            'est' => '2017',
            'img' => 'lanny.jpg',
            'role' => 'employee',
            'email' => 'lanny@gmail.com',
            'password' => bcrypt('lanny'),
        ]);

    }
}
