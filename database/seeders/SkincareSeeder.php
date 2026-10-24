<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skincare;

class SkincareSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_produk' => 'Low pH Good Morning Gel Cleanser',
                'brand'       => 'COSRX',
                'kategori'    => 'Cleanser',
                'harga'       => 145000,
                'ukuran_ml'   => 150,
                'tipe_kulit'  => 'All Skin Types',
                'status'      => 'ready',
                'foto'        => 'https://images.unsplash.com/photo-1556228720-195a672e8a03'
            ],
            [
                'nama_produk' => 'Niacinamide 10% + Zinc 1%',
                'brand'       => 'The Ordinary',
                'kategori'    => 'Serum',
                'harga'       => 160000,
                'ukuran_ml'   => 30,
                'tipe_kulit'  => 'Oily',
                'status'      => 'ready',
                'foto'        => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be'
            ],
            [
                'nama_produk' => 'Centella Unscented Sunscreen SPF50+',
                'brand'       => 'Purito',
                'kategori'    => 'Sunscreen',
                'harga'       => 210000,
                'ukuran_ml'   => 60,
                'tipe_kulit'  => 'Sensitive',
                'status'      => 'ready',
                'foto'        => 'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908'
            ],
            [
                'nama_produk' => 'Hydrating Facial Toner',
                'brand'       => 'Pyunkang Yul',
                'kategori'    => 'Toner',
                'harga'       => 180000,
                'ukuran_ml'   => 200,
                'tipe_kulit'  => 'Dry',
                'status'      => 'out_of_stock',
                'foto'        => 'https://images.unsplash.com/photo-1608248597266-c89e86381282'
            ],
            [
                'nama_produk' => 'Barrier Moisture Gel',
                'brand'       => 'Somethinc',
                'kategori'    => 'Moisturizer',
                'harga'       => 139000,
                'ukuran_ml'   => 50,
                'tipe_kulit'  => 'Combination',
                'status'      => 'ready',
                'foto'        => 'https://images.unsplash.com/photo-1617897903246-719242758050'
            ],
            [
                'nama_produk' => 'BHA Blackhead Power Liquid',
                'brand'       => 'COSRX',
                'kategori'    => 'Exfoliator',
                'harga'       => 225000,
                'ukuran_ml'   => 100,
                'tipe_kulit'  => 'Oily',
                'status'      => 'ready',
                'foto'        => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b'
            ],
            [
                'nama_produk' => 'UV Aqua Rich Watery Essence SPF50+',
                'brand'       => 'Biore',
                'kategori'    => 'Sunscreen',
                'harga'       => 120000,
                'ukuran_ml'   => 50,
                'tipe_kulit'  => 'All Skin Types',
                'status'      => 'ready',
                'foto'        => 'https://images.unsplash.com/photo-1556228722-d119f829c33b'
            ],
            [
                'nama_produk' => 'Advanced Snail 96 Mucin Power Essence',
                'brand'       => 'COSRX',
                'kategori'    => 'Essence',
                'harga'       => 205000,
                'ukuran_ml'   => 100,
                'tipe_kulit'  => 'Dry',
                'status'      => 'ready',
                'foto'        => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be'
            ],
        ];

        foreach ($data as $item) {
            Skincare::create($item);
        }
    }
}
