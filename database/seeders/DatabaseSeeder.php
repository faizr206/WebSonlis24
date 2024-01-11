<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'email' => 'rmuhammadreff@gmail.com',
            'username' => 'Rempaah',
            'password' => \Illuminate\Support\Facades\Hash::make('123Reffah'),
            'sekolah' => 'MANICS',
            'jenjang' => 'SMA',
            'admin' => true
        ]);

        \App\Models\User::create([
            'email' => 'reff789@gmail.com',
            'username' => 'Rempaah',
            'password' => \Illuminate\Support\Facades\Hash::make('123Reffah'),
            'sekolah' => 'MANICS',
            'jenjang' => 'SMP',
        ]);

        \App\Models\Competition::create([
            'name' => 'lomba1',
            'jenjang' => 'SMA',
            'peserta' => 3,
        ]);

        \App\Models\Competition::create([
            'name' => 'lomba2',
            'jenjang' => 'SMA',
            'peserta' => 1,
        ]);

        \App\Models\Competition::create([
            'name' => 'lomba3',
            'jenjang' => 'SMP',
            'peserta' => 1,
        ]);

        \App\Models\Team::create([
            'user_id' => 1,
            'competition_id' => 1
        ]);

        \App\Models\Participant::create([
            'team_id' => 1,
            'name' => 'Peserta 1'
        ]);

        \App\Models\Participant::create([
            'team_id' => 1,
            'name' => 'Peserta 2'
        ]);

        \App\Models\Participant::create([
            'team_id' => 1,
            'name' => 'Peserta 3'
        ]);
    }
}
