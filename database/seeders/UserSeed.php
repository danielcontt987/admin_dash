<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jose Daniel Contreras Perez',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678.'),
        ]);
    }
}
