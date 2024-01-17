<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("trains")->insert([
            [
                "name"=>"Tren 1",
                "passengers"=>600,
                "year"=>2015,
                "train_type_id"=>1
            ],
            [
                "name"=>"Tren 2",
                "passengers"=>430,
                "year"=>2009,
                "train_type_id"=>2
            ],
            [
                "name"=>"Tren 3",
                "passengers"=>200,
                "year"=>2023,
                "train_type_id"=>3
            ]
        ]);
    }
}
