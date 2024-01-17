<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tickets")->insert([
            [
                "date"=>now(),
                "price"=>10,
                "train_id"=>1,
                "ticket_type_id"=>1
            ],
            [
                "date"=>now(),
                "price"=>2,
                "train_id"=>3,
                "ticket_type_id"=>3
            ],
            [
                "date"=>now(),
                "price"=>5.3,
                "train_id"=>2,
                "ticket_type_id"=>2
            ],
            
        ]);
    }
}
