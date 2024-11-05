<?php

use Illuminate\Support\Facades\Hash;
use App\Models\User;

public function run(): void
{
    // Creazione di un utente predefinito
    User::firstOrCreate(
        ['email' => 'user@example.com'],
        [
            'name' => 'user',
            'password' => Hash::make('password'), // Assicurati che la password sia crittografata
        ]
    );

    // Chiama il seeder per i progetti
    $this->call(ProjectSeeder::class);
}

