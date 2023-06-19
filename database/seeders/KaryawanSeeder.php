<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_karyawan' => 'thoriq',
                'alamat' => 'banyuwangi',
                'no_telpon' => '08135566',
                'email' => 'thoriq@gmail.com',
                'posisi' => 'kasir',
                'gaji' => '2000000',

            ],
            [
                'nama_karyawan' => 'sri',
                'alamat' => 'jember',
                'no_telpon' => '08127788',
                'email' => 'sri@gmail.com',
                'posisi' => 'kasir',
                'gaji' => '1500000',
            ],
            [
                'nama_karyawan' => 'Luki',
                'alamat' => 'patrang',
                'no_telpon' => '0818112',
                'email' => 'luki@gmail.com',
                'posisi' => 'Barber',
                'gaji' => '2500000',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        // Looping untuk menyimpan setiap data ke tabel booking_detail
        foreach ($data as $item) {
            Karyawan::create($item);
        }

        //
    }
}
