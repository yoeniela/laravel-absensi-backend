<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'yhonho',
            'email' => 'yhonho@gmail.com',
            'password' => Hash::make('qwerasdf'),
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'PT. Yhonho Pharma',
            'email' => 'yhonhopharma@gmail.com',
            'address' => 'Jl. Kakap Sungai Dama Samarinda Kalimantan Timur',
            'latitude' => '-0.506021',
            'longitude' => '117.159570',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '16:30',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
