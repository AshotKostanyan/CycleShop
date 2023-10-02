<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        //  \App\Models\Cart::factory(10)->create();


        // // // Cycle seeder
        \App\Models\Cycle::factory(10)->create();
        \App\Models\News::factory(10)->create();

        // // Category seeder
        // for($i = 1; $i <= 3;$i++){
        //     \App\Models\CycleCategory::factory()->create([
        //         'size' => '0'.$i
        //     ]);
        // }

        // \App\Models\Comments::factory(10)->create();
    }
}
