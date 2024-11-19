<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instruktur = Role::create(["name" => "instruktur"]);
        $peserta = Role::create(["name" => "peserta"]);
        $manager = Role::create(["name" => "manager"]);
    }
}
