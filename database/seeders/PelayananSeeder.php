<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Pelayanan;

class PelayananSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['jenis_pelayanan' => 'Smoothing', 'harga' => 100000],
            ['jenis_pelayanan' => 'Perm Hair Treathment', 'harga' => 200000],
            ['jenis_pelayanan' => 'Groomming Hair and Tatto', 'harga' => 300000],
            ['jenis_pelayanan' => 'Colouring', 'harga' => 400000],
            ['jenis_pelayanan' => 'Gentlement Cut', 'harga' => 600000],
            ['jenis_pelayanan' => 'Kids Haircut', 'harga' => 600000],
        ];

        foreach ($data as $item) {
            Pelayanan::create($item);
        }
    }
}
