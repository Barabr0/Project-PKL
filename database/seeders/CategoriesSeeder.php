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
            ['name' => 'Healing', 'name_en' => 'Healing', 'is_top' => true],
            ['name' => 'Workshop', 'name_en' => 'Workshop', 'is_top' => true],
            ['name' => 'Kreator', 'name_en' => 'Creators', 'is_top' => true],
            ['name' => 'Musik', 'name_en' => 'Music', 'is_top' => false],
            ['name' => 'Seminar', 'name_en' => 'Seminar', 'is_top' => false],
            ['name' => 'Olahraga', 'name_en' => 'Sports', 'is_top' => false],
            ['name' => 'Festival', 'name_en' => 'Festival', 'is_top' => false],
            ['name' => 'Teknologi', 'name_en' => 'Technology', 'is_top' => false],
        ];

        foreach ($cats as $cat) {
            categories::create([
                'nama_kategori' => $cat['name'],
                'nama_kategori_en' => $cat['name_en'],
                'slug' => Str::slug($cat['name']),
                'is_top' => $cat['is_top'],
                'gambar' => "https://picsum.photos/400/300?random=" . rand(1, 100)
            ]);
        }
    }
}
