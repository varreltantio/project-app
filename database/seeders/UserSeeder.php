<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Varrel Dwitantio Purwadiansyah',
            'email' => 'varreldtantio@gmail.com',
            'password' => bcrypt('varrel12345'),
            'role' => 'gardener'
        ]);
        User::create([
            'name' => 'Dwi Hadi Prasetyo',
            'email' => 'dwihadi123@gmail.com',
            'password' => bcrypt('dwi12345'),
            'role' => 'designer'
        ]);
        User::create([
            'name' => 'Ilham Pandu',
            'email' => 'ilhampandu@gmail.com',
            'password' => bcrypt('ilham12345'),
            'role' => 'user'
        ]);
    }
}
