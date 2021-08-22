<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Departamento::factory(5)->create();
        \App\Models\Funcionario::factory(10)->create();
        \App\Models\Projeto::factory(5)->create();
    }
}