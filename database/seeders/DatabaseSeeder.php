<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\EmployeeSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KaryawanSeeder::class);
        // $this->call(BookingDetailSeeder::class);
        // $this->call(FasilitasSeeder::class);
        // $this->call(PelayananSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
