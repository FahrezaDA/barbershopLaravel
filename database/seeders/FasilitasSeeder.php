<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Fasilitas;
use Faker\Factory as Faker;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $peralatan_barbershop = [
            'sisir', 'gunting', 'pisau cukur', 'handuk', 'kursi barber', 'meja kerja', 'capster', 'hair dryer'
        ];

        foreach ($peralatan_barbershop as $peralatan) {
            $jumlah = $faker->numberBetween(1, 10);

            Fasilitas::create([
                'barang' => $peralatan,
                'jumlah' => $jumlah
            ]);
        }
    }
}
