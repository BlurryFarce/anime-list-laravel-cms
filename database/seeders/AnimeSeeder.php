<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anime;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anime::create([
            'title' => 'Attack on Titan',
            'description' => 'Humans battle against giant humanoid Titans in a dystopian world.',
            'episodes' => 75,
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx16498-73IhOXpJZiMF.jpg',
            'status' => 'Completed',
            'genre' => 'Action, Adventure, Fantasy',
            'release_date' => '2013-04-06',
        ]);

        Anime::create([
            'title' => 'Naruto',
            'description' => 'A young ninja who seeks recognition and dreams of becoming the Hokage.',
            'episodes' => 220,
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx20-LxrhhIQyiE60.jpg',
            'status' => 'Completed',
            'genre' => 'Action, Adventure, Martial Arts',
            'release_date' => '2002-10-03',
        ]);

        Anime::create([
            'title' => 'One Piece',
            'description' => 'The story of Monkey D. Luffy and his pirate crew in search of the greatest treasure, One Piece.',
            'episodes' => 1000,
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx21-YCDoj1EkAxFn.jpg',
            'status' => 'Ongoing',
            'genre' => 'Action, Adventure, Fantasy',
            'release_date' => '1999-10-20',
        ]);

        Anime::create([
            'title' => 'Fullmetal Alchemist: Brotherhood',
            'description' => 'Two brothers search for the Philosopher’s Stone after a failed attempt to bring their mother back to life.',
            'episodes' => 64,
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx5114-Dilr312jctdJ.jpg',
            'status' => 'Completed',
            'genre' => 'Action, Adventure, Supernatural',
            'release_date' => '2009-04-05',
        ]);

        Anime::create([
            'title' => 'My Hero Academia',
            'description' => 'In a world where people with superpowers are the norm, a boy without them dreams of becoming a hero.',
            'episodes' => 120,
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx21459-RoPwgrZ32gM3.jpg',
            'status' => 'Ongoing',
            'genre' => 'Action, Superhero, Shonen',
            'release_date' => '2016-04-03',
        ]);
    }
}
