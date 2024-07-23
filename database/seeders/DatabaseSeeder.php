<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // $table->string('name');
        // $table->string('email')->unique();
        // $table->string('full_name');
        // $table->string('phone_number');
        // $table->string('gender');
        // $table->date('date');
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'full_name' => 'Super Admin',
            'phone_number' => '0120000000',
            'gender' => 'male',
            'date' => now(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
