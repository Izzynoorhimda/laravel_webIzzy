<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritalist = [
            'judul' => '320 Pesilat Perisai Diri Ikuti UKT Periode 72 di SMKN 4 Tasikmalaya, Penerimaan Anggota Baru Dibuka',
            'gambar' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2024/07/14/2757322712.png',
            'link' => 'https://kabarpriangan.pikiran-rakyat.com/kabar-priangan/pr-1488326544/320-pesilat-perisai-diri-ikuti-ukt-periode-72-di-smkn-4-tasikmalaya-penerimaan-anggota-baru-dibuka?page=all',
        ];
        [
          
            'judul' => '320 Pesilat Perisai Diri Ikuti UKT Periode 72 di SMKN 4 Tasikmalaya, Penerimaan Anggota Baru Dibuka',
            'gambar' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2024/07/14/2757322712.png',
            'link' => 'https://kabarpriangan.pikiran-rakyat.com/kabar-priangan/pr-1488326544/320-pesilat-perisai-diri-ikuti-ukt-periode-72-di-smkn-4-tasikmalaya-penerimaan-anggota-baru-dibuka?page=all',
        ];
        DB::table('berita')->insert($beritalist);
    }
    
}
