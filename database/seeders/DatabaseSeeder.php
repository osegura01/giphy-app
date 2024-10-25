<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Person;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $person_id = Person::factory()->create([
            'name' => 'John',
            'first_name' => 'Doe',
            'last_name' => 'Smith',
            'birthday' => '1990-10-13',
            'gender' => 'male'
        ]);

        User::factory()->create([
            'person_id' => $person_id,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 
        ]);
    }
}
