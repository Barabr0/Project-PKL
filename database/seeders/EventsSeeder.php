<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\events;
use App\Models\categories;

class EventsSeeder extends Seeder
{
    public function run(): void
    {
        // Get category IDs
        $healingId = categories::where('nama_kategori', 'Healing')->first()?->id ?? 1;
        $workshopId = categories::where('nama_kategori', 'Workshop')->first()?->id ?? 2;
        $kreatorId = categories::where('nama_kategori', 'Kreator')->first()?->id ?? 3;

        // Get creator IDs
        $creatorIds = \App\Models\User::where('role', 'like', '%creator%')->pluck('id')->toArray();

        // Popular Events in Jakarta
        for ($i = 1; $i <= 5; $i++) {
            $name = "Event Populer Jakarta $i";
            $nameEn = "Jakarta Popular Event $i";
            events::create([
                'nama_event' => $name,
                'nama_event_en' => $nameEn,
                'slug' => Str::slug($name) . '-' . rand(100,999),
                'deskripsi' => 'Nikmati pengalaman seru di event terpopuler di Jakarta minggu ini.',
                'deskripsi_en' => 'Enjoy exciting experiences at the most popular events in Jakarta this week.',
                'gambar' => "https://picsum.photos/400/300?random=" . rand(1, 100),
                'harga' => rand(100, 1000) * 1000,
                'tanggal' => now()->addDays(rand(1, 30)),
                'lokasi' => 'Jakarta',
                'lokasi_en' => 'Jakarta',
                'kategori_id' => rand(1, 8),
                'is_popular' => true,
                'user_id' => $creatorIds ? $creatorIds[array_rand($creatorIds)] : null,
                'status' => 'aktif'
            ]);
        }

        // Healing Events
        for ($i = 1; $i <= 3; $i++) {
            $name = "Healing Retreat $i";
            $nameEn = "Healing Retreat $i";
            events::create([
                'nama_event' => $name,
                'nama_event_en' => $nameEn,
                'slug' => Str::slug($name) . '-' . rand(100,999),
                'deskripsi' => 'Tenangkan pikiran dan jiwa Anda dengan sesi healing yang mendalam.',
                'deskripsi_en' => 'Calm your mind and soul with a deep healing session.',
                'gambar' => "https://picsum.photos/400/300?random=" . rand(101, 200),
                'harga' => rand(200, 1500) * 1000,
                'tanggal' => now()->addDays(rand(1, 30)),
                'lokasi' => ['Bali', 'Bandung', 'Lombok'][rand(0,2)],
                'lokasi_en' => ['Bali', 'Bandung', 'Lombok'][rand(0,2)],
                'kategori_id' => $healingId,
                'is_popular' => rand(0,1),
                'user_id' => $creatorIds ? $creatorIds[array_rand($creatorIds)] : null,
                'status' => 'aktif'
            ]);
        }

        // Workshop Events
        for ($i = 1; $i <= 3; $i++) {
            $name = "Workshop Kreatif $i";
            $nameEn = "Creative Workshop $i";
            events::create([
                'nama_event' => $name,
                'nama_event_en' => $nameEn,
                'slug' => Str::slug($name) . '-' . rand(100,999),
                'deskripsi' => 'Tingkatkan skill Anda melalui workshop interaktif bersama para ahli.',
                'deskripsi_en' => 'Enhance your skills through interactive workshops with experts.',
                'gambar' => "https://picsum.photos/400/300?random=" . rand(201, 300),
                'harga' => rand(50, 300) * 1000,
                'tanggal' => now()->addDays(rand(1, 30)),
                'lokasi' => ['Jakarta', 'Yogyakarta', 'Surabaya'][rand(0,2)],
                'lokasi_en' => ['Jakarta', 'Yogyakarta', 'Surabaya'][rand(0,2)],
                'kategori_id' => $workshopId,
                'is_popular' => rand(0,1),
                'user_id' => $creatorIds ? $creatorIds[array_rand($creatorIds)] : null,
                'status' => 'aktif'
            ]);
        }

        // General Events
        for ($i = 1; $i <= 5; $i++) {
            $name = "Event Umum $i";
            $nameEn = "General Event $i";
            events::create([
                'nama_event' => $name,
                'nama_event_en' => $nameEn,
                'slug' => Str::slug($name) . '-' . rand(100,999),
                'deskripsi' => 'Berbagai macam event menarik untuk mengisi waktu luang Anda.',
                'deskripsi_en' => 'A variety of interesting events to fill your free time.',
                'gambar' => "https://picsum.photos/400/300?random=" . rand(301, 400),
                'harga' => rand(50, 500) * 1000,
                'tanggal' => now()->addDays(rand(1, 30)),
                'lokasi' => ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta'][rand(0,3)],
                'lokasi_en' => ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta'][rand(0,3)],
                'kategori_id' => rand(1, 8),
                'is_popular' => false,
                'user_id' => $creatorIds ? $creatorIds[array_rand($creatorIds)] : null,
                'status' => ['aktif', 'nonaktif'][rand(0,1)]
            ]);
        }
    }
}
