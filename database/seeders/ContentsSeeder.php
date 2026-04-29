<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\contents;

class ContentsSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $judul = "Banner Promosi $i";
            $judulEn = "Promotion Banner $i";
            contents::create([
                'judul' => $judul,
                'judul_en' => $judulEn,
                'slug' => Str::slug($judul) . '-' . rand(100,999),
                'deskripsi' => 'Deskripsi untuk banner promosi menarik ini.',
                'deskripsi_en' => 'Description for this exciting promotional banner.',
                'gambar' => "https://picsum.photos/1200/400?random=" . rand(101, 200),
                'kategori_id' => rand(1, 6),
                'url' => '/event/detail'
            ]);
        }
    }
}
