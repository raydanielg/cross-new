<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'name' => 'Kilimanjaro Challenge',
                'location' => 'Moshi, Kilimanjaro',
                'date_range' => '15-17 June 2026',
                'max_participants' => 200,
                'registered_count' => 156,
                'status' => 'Open',
                'type' => 'Competition',
                'icon' => 'fa-bicycle',
                'color' => 'success',
            ],
            [
                'name' => 'Dar City Ride',
                'location' => 'Dar es Salaam',
                'date_range' => '22 June 2026',
                'max_participants' => 150,
                'registered_count' => 89,
                'status' => 'Open',
                'type' => 'Community Ride',
                'icon' => 'fa-city',
                'color' => 'success',
            ],
            [
                'name' => 'Usambara Classic',
                'location' => 'Lushoto, Tanga',
                'date_range' => '05-07 July 2026',
                'max_participants' => 250,
                'registered_count' => 234,
                'status' => 'Open',
                'type' => 'Competition',
                'icon' => 'fa-mountain',
                'color' => 'success',
            ],
            [
                'name' => 'Zanzibar Beach Tour',
                'location' => 'Zanzibar',
                'date_range' => '22 June 2026',
                'max_participants' => 100,
                'registered_count' => 45,
                'status' => 'Almost Full',
                'type' => 'Festival',
                'icon' => 'fa-umbrella-beach',
                'color' => 'warning',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
