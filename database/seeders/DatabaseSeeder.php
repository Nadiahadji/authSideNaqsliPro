<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $user=new User();

        $user::factory()->create([
            'name' => 'Test User',
            'password' => static::$password ??= Hash::make('password'),
            'email' => 'test@example.com',
            // 'remember_token' => Str::random(10),
            // 'email_verified_at' => now(),

        ]);
    }
}
