<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\categories;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $cats = [
            ['name' => 'Healing', 'is_top' => true],
            ['name' => 'Workshop', 'is_top' => true],
            ['name' => 'Kreator', 'is_top' => true],
            ['name' => 'Musik', 'is_top' => false],
            ['name' => 'Seminar', 'is_top' => false],
            ['name' => 'Olahraga', 'is_top' => false],
            ['name' => 'Festival', 'is_top' => false],
            ['name' => 'Teknologi', 'is_top' => false],
        ];

        foreach ($cats as $cat) {
            categories::create([
                'nama_kategori' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'is_top' => $cat['is_top'],
                'gambar' => "https://picsum.photos/400/300?random=" . rand(1, 100)
            ]);
        }
    }
}
