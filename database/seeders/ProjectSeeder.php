<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Project E-Commerce',
            'description' => 'Pengembangan aplikasi e-commerce',
            'status' => 'Planning'
        ]);
        Project::create([
            'name' => 'Riset Pasar',
            'description' => 'Penelitian pasar untuk produk baru',
            'status' => 'Completed'
        ]);
        Project::create([
            'name' => 'Project Video Promosi',
            'description' => 'Produksi video promosi produk',
            'status' => 'In Progress'
        ]);
    }
}
