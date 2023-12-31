<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'document'              => 71369852,
            'name'                  => 'Jaime Sierra',
            'email'                 => 'coderman1980@gmail.com',
            'address'               => 'Cll. 123 # 45-67',
            'phone'                 => '321 456 789',
            'password'              => Hash::make('coderman'),
            'is_active'             => true,
            'profile_photo_path'    => 'users/' . fake()->image('public/storage/users', 640, 480, null, false),
        ]);

        $admin->assignRole('admin');

        User::factory(5)->create()->each(function ($user) {
            $user->assignRole('supervisor');
        });

        User::factory(15)->create()->each(function ($user) {
            $user->assignRole('user');
        });
    }
}
