<?php

namespace Database\Seeders;
use App\Models\Character;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Character::create([
            'name' => 'Eren Yeager',
            'bio' => 'The main protagonist of Attack on Titan, driven by his desire to eliminate all Titans.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b40882-dsj7IP943WFF.jpg',
            'gender' => 'Male',
            'age' => 19,
            'anime_id' => 1, // ID of Attack on Titan
        ]);

        Character::create([
            'name' => 'Mikasa Ackerman',
            'bio' => 'A top-notch soldier and Eren\'s adopted sister.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b40881-F3gr1PkreDvj.png',
            'gender' => 'Female',
            'age' => 19,
            'anime_id' => 1, // ID of Attack on Titan
        ]);

        Character::create([
            'name' => 'Naruto Uzumaki',
            'bio' => 'The titular character of Naruto, a ninja who dreams of becoming the strongest Hokage.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b17-IazKGogQwJ1p.png',
            'gender' => 'Male',
            'age' => 17,
            'anime_id' => 2, // ID of Naruto
        ]);

        Character::create([
            'name' => 'Sasuke Uchiha',
            'bio' => 'Naruto\'s rival and the last surviving member of the Uchiha clan.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b13-SISLEw1oAD7a.png',
            'gender' => 'Male',
            'age' => 17,
            'anime_id' => 2, // ID of Naruto
        ]);

        Character::create([
            'name' => 'Monkey D. Luffy',
            'bio' => 'The main character of One Piece, a pirate with the ability to stretch his body like rubber.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b40-fDTq7f4XyJan.png',
            'gender' => 'Male',
            'age' => 19,
            'anime_id' => 3, // ID of One Piece
        ]);

        Character::create([
            'name' => 'Roronoa Zoro',
            'bio' => 'A master swordsman and member of Luffy\'s pirate crew.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b62-Wixe3kLJGVby.png',
            'gender' => 'Male',
            'age' => 21,
            'anime_id' => 3, // ID of One Piece
        ]);

        Character::create([
            'name' => 'Edward Elric',
            'bio' => 'The main protagonist of Fullmetal Alchemist: Brotherhood, a young alchemist searching for the Philosopher\'s Stone.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b11-TA5Nuk7EDUZG.jpg',
            'gender' => 'Male',
            'age' => 15,
            'anime_id' => 4, // ID of Fullmetal Alchemist: Brotherhood
        ]);

        Character::create([
            'name' => 'Alphonse Elric',
            'bio' => 'Edward\'s younger brother, whose soul is trapped in a suit of armor.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b12-tCKu8yK5kFL5.jpg',
            'gender' => 'Male',
            'age' => 14,
            'anime_id' => 4, // ID of Fullmetal Alchemist: Brotherhood
        ]);

        Character::create([
            'name' => 'Izuku Midoriya',
            'bio' => 'The main protagonist of My Hero Academia, a boy born without superpowers in a world full of heroes.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b89028-8w1I9o1ISHMg.png',
            'gender' => 'Male',
            'age' => 16,
            'anime_id' => 5, // ID of My Hero Academia
        ]);

        Character::create([
            'name' => 'Katsuki Bakugo',
            'bio' => 'Izuku\'s childhood friend and rival, with the ability to create explosions.',
            'image_url' => 'https://s4.anilist.co/file/anilistcdn/character/large/b88892-kYy9l65iW5rx.png',
            'gender' => 'Male',
            'age' => 16,
            'anime_id' => 5, // ID of My Hero Academia
        ]);
    }
}
