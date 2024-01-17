<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TrainTypeSeeder::class,
            TicketTypeSeeder::class,
            TrainSeeder::class,
            TicketSeeder::class
        ]);
    }
}
