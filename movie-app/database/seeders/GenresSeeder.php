<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create([
            'nama' => 'Komedi',
            'deskripsi' => 'Genre komedi adalah genre film di mana penekanan utama adalah pada kelucuan',
        ]);

        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'Genre horor adalah genre cerita rekaan yang dimaksudkan untuk menimbulkan perasaan takut atau ngeri bagi penyimaknya',
        ]);

        Genre::create([
            'nama' => 'Aksi',
            'deskripsi' => 'Genre aksi adalah genre film yang biasanya sangat menegangkan saat ditonton',
        ]);

        Genre::create([
            'nama' => 'Animasi',
            'deskripsi' => 'Genre animasi adalah genre film yang merupakan karya tangan (gambar) yang bergerak',
        ]);

        Genre::create([
            'nama' => 'Romantis',
            'deskripsi' => 'Genre romantis adalah genre film yang menceritakan kisah cinta yang tercipta di antara para tokoh',
        ]);
    }

}
