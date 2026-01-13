<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'ndiandie@gmail.com',
                'password' => Hash::make('mediamialhidayah123'),
                'role' => 'superadmin',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@mialhidayahtarik.sch.id',
                'password' => Hash::make('mediamialhidayah123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Guru',
                'email' => 'guru@mialhidayahtarik.sch.id',
                'password' => Hash::make('mediamialhidayah123'),
                'role' => 'guru',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
