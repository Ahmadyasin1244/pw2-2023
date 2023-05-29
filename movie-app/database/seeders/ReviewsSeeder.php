<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Sang Pemimpi',
            'user' => 'Andrea Hirata',
            'rating' => 9.0,
            'review' => 'Dalam novel ini, Andrea mengeksplorasi hubungan persahabatannya dengan dua anak yatim piatu, Arai Ichsanul Mahidin dan Jimbron, serta kekuatan mimpi yang dapat membawa Andrea dan Arai melanjutkan studi ke Sorbonne, Paris, Prancis',
            'tanggal' => 1974,
        ]);

        Review::create([
            'film' => 'Mencuri Raden Saleh',
            'user' => 'Angga Dwimas',
            'rating' => 9.2,
            'review' => 'Sekelompok mahasiswa berencana untuk mencuri lukisan bersejarah. Lukisan tersebut adalah Penangkapan Pangeran Diponegoro karya Raden Saleh, yang berada di Istana Presiden dan tak ternilai harganya. Masing-masing memiliki peran dan tugas yang berbeda dalam menjalankan rencana pencurian ini.',
            'tanggal' => 1991,
        ]);

        Review::create([
            'film' => 'Merantau',
            'user' => 'Gareth Evans',
            'rating' => 8.9,
            'review' => 'Di Minangkabau, Sumatra Barat, Yuda (Iko Uwais), seorang pendekar silat Minangkabau aliran Harimau dalam persiapan akhir untuk memulai perantauannya. Ia harus meninggalkan keluarganya, ibu tercinta, Wulan (Christine Hakim), dan udanya (kakak dalam bahasa Minang), Yayan (Donny Alamsyah), kenyamanan, keindahan kampung halamannya, dan mencari eksistensi dirinya di keserabutan kota Jakarta',
            'tanggal' => 1994,
        ]);

        Review::create([
            'film' => 'Laskar pelangi',
            'user' => 'Riri riza',
            'rating' => 9.3,
            'review' => 'Laskar Pelangi adalah sebuah film drama Indonesia tahun 2008 yang disutradarai oleh Riri Riza dari skenario yang ditulis oleh Salman Aristo bersama Riri dan Mira Lesmana berdasarkan novel berjudul sama karya Andrea Hirata. Film ini diproduksi oleh Miles Films bersama Mizan Productions dan SinemArt.',
            'tanggal' => 2008,
        ]);

        Review::create([
            'film' => 'Air terjun pengantin',
            'user' => 'Rizal Mantovani',
            'rating' => 8.7,
            'review' => 'Film diawali dengan dukun ilmu hitam bertopeng yang menculik seorang wanita untuk dijadikan pengantinnya. Sang dukun dikejar warga setempat hingga ia terpojok ke sebuah air terjun. Karena wanita disebelahnya terus memberontak, sang dukun melempar wanita itu ke air terjun. Lalu, sang dukun menyusulnya jatuh, dan dukun yang masih hidup itu melihat wanitanya yang sudah meninggal dan frustasi, lalu membunuh seluruh warga.',
            'tanggal' => 1994,
        ]);
    }
}
