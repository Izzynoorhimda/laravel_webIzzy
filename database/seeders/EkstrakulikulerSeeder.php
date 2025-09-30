<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ekstrakulikulerlist = [
            'judul' => 'English Club',
            'gambar' => 'https://web-sekolah-tawny.vercel.app/_nuxt/ec.BQTqDsuh.jpg',
            'isi' => 'Melatih kemampuan berbahasa Inggris melalui diskusi, debat, dan kegiatan interaktif lainnya.',
        ];
         DB::table('ekstrakulikulers')->insert($ekstrakulikulerlist);
    }
}
