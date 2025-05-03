<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Seed users (for authentication testing)
        User::factory(10)->create();  // Creates 10 users using the UserFactory

        // Call the custom seeders for albums and tracks
        $this->call([
            AlbumSeeder::class,
            TrackSeeder::class,
        ]);
    }
}
