<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('platforms')->insert([
            ['name' => 'facebook'],
            ['name' => 'instagram'],
            ['name' => 'gmail'],
            ['name' => 'linkedin'],
            ['name' => 'twitter'],
        ]);
    }
}
