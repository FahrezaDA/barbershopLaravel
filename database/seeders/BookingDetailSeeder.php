<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataBooking;

class BookingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data contoh untuk diisi pada tabel booking_detail
        $data = [
            [
                'jam' => '13:00',
                'stats' => 'pending',
            ],
            [
                'jam' => '14:00',
                'stats' => 'booked',
            ],
            [
                'jam' => '15:00',
                'stats' => 'pending',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        // Looping untuk menyimpan setiap data ke tabel booking_detail
        foreach ($data as $item) {
            DataBooking::create($item);
        }
    }
}
