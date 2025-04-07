<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Event 1',
            'description' => 'Event 1 desc',
            'start_time' => now()->addDays(7),
            'end_time' => now()->addDays(7)->addHours(5),
        ]);
        Event::create([
            'title' => 'Event 2',
            'description' => 'Event 2 desc',
            'start_time' => now()->addDays(8),
            'end_time' => now()->addDays(8)->addHours(5),
        ]);
        Event::create([
            'title' => 'Event 3',
            'description' => 'Event 3 desc',
            'start_time' => now()->addDays(9),
            'end_time' => now()->addDays(9)->addHours(5),
        ]);
    }
}
