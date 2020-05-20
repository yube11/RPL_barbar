<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'email' => 'sabrinadizam@gmail.com',
            'nama' => 'Sabrina Diza',
        	'password' => Hash::make('password'),
        	'remember_token' => Str::random(10),
        ]);
    }
}
