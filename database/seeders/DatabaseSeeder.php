<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Adi Putera Zhou',
            'email' => 'adipz160801@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CourierSeeder::class);
    }
}
