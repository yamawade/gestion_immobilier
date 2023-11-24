<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom' => 'WADE',
            'prenom' => 'Mariam',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('passer1234'),
            'role' => 'admin',
        ]);

        User::create([
            'nom' => 'THIOUB',
            'prenom' => 'Dokhe',
            'email' => 'thioub@gmail.com',
            'password' => Hash::make('passer1234'),
            'role' => 'admin',
        ]);

        User::create([
            'nom' => 'FALL',
            'prenom' => 'Hamady',
            'email' => 'fall@gmail.com',
            'password' => Hash::make('passer1234'),
            'role' => 'admin',
        ]);
    }
}
