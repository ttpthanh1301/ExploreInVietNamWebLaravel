<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tour;
use Illuminate\Support\Carbon;

class ToursTableSeeder extends Seeder
{
    public function run()
    {
        Tour::create([
            'title' => 'Hoa Lu - Tam Coc - Mua Cave',
            'location' => 'Ninh Binh',
            'price' => '8,000,000 VNĐ',
            'description' => 'One-day tour with amazing landscapes.',
            'period' => '1 day',
            'schedule' => '07:30 - Pick up | 09:15 - Short break | 10:30 - Visit Hoa Lu | 13:30 - Tam Coc boat ride | 15:30 - Mua Cave climb',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Tour::create([
            'title' => 'Sapa Trekking Tour',
            'location' => 'Sapa',
            'price' => '5,500,000 VNĐ',
            'description' => 'Trekking adventure in Sapa with local guides and stunning views.',
            'period' => '2 days, 1 night',
            'schedule' => '06:00 - Departure | 10:30 - Arrival in Sapa | 11:00 - Trekking begins | 19:00 - Dinner and relaxation',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
