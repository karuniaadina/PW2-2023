<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anime::create([
            'title' => 'Naruto',
            'poster' => 'https://cdn.myanimelist.net/images/anime/13/17405.jpg',
            'genres_id' => 1,
            'synopsis' => 'Naruto Uzumaki, a mischievous adolescent ninja, struggles as he searches for recognition and dreams of becoming the Hokage, the village\'s leader and strongest ninja.',
            'release_date' => '2002-10-03',
            'countries_id' => 1,
            'rating' => 8.19,
        ]);
        Anime::create([
            'title' => 'Naruto: Shippuden',
            'poster' => 'https://cdn.myanimelist.net/images/anime/5/17407.jpg',
            'genres_id' => 1,
            'synopsis' => 'Naruto: Shippuuden is the continuation of the original animated TV series Naruto.The story revolves around an older and slightly more matured Uzumaki Naruto and his quest to save his friend Uchiha Sasuke from the grips of the snake-like Shinobi, Orochimaru. After 2 and a half years Naruto finally returns to his village of Konoha, and sets about putting his ambitions to work, though it will not be easy, as He has amassed a few (more dangerous) enemies, in the likes of the shinobi organization; Akatsuki.',
            'release_date' => '2007-02-15',
            'countries_id' => 1,
            'rating' => 8.16,
        ]);
        Anime::create([
            'title' => 'One Piece',
            'poster' => 'https://cdn.myanimelist.net/images/anime/6/73245.jpg',
            'genres_id' => 1,
            'synopsis' =>  'One piece is a story about Monkey D. Luffy, who wants to become a sea-robber. In a world mystical, there have a mystical fruit whom eat will have a special power but also have greatest weakness. Monkey ate Gum-Gum Fruit which gave him a strange power but he can NEVER swim. And this weakness made his dream become a sea – robber to find ultimate treasure is difficult. One Piece is a story about Monkey D. Luffy, who wants to become a sea-robber. In a world mystical, there have a mystical fruit whom eat will have a special power but also have greatest weakness. Monkey ate Gum-Gum Fruit which gave him a strange power but he can NEVER swim. And this weakness made his dream become a sea – robber to find ultimate treasure is difficult. But along his ways, he meet himself many members to help. Together, they sail the Seven Seas of adventure in search of the elusive treasure “One Piece.”',
            'release_date' => '1999-10-20', 
            'countries_id' => 1,
            'rating' => 8.54,
        ]);
        Anime::create([
            'title' => 'Bleach',
            'poster' => 'https://cdn.myanimelist.net/images/anime/3/40451.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Bleach is a popular anime series that follows the story of Ichigo Kurosaki, a teenager with the ability to see ghosts. When his family is attacked by evil spirits known as Hollows, Ichigo obtains the powers of a Soul Reaper, a celestial being tasked with protecting the living world from supernatural threats. With his newfound abilities, Ichigo embarks on thrilling adventures, battling dangerous creatures and uncovering dark secrets within the spirit realm. Known for its intense action, intricate plot, and memorable characters, Bleach has captivated fans worldwide and has become a significant contribution to the anime genre.',
            'release_date' => '2004-10-05', 
            'countries_id' => 1,
            'rating' => 7.89,
        ]);
        Anime::create([
            'title' => 'Dragon Ball Z',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNGM5MTEyZDItZWNhOS00NzNkLTgwZTAtNWIzY2IzZmExOWMxXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_FMjpg_UX1000_.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Dragon Ball Z is an iconic anime series that continues the story of Goku, a Saiyan warrior who protects Earth from various powerful adversaries. Set years after the original Dragon Ball series, Dragon Ball Z follows Goku`s journey as he defends the planet against villains ranging from powerful aliens to deadly androids and even destructive gods. ',
            'release_date' => '1989-04-26', 
            'countries_id' => 1,
            'rating' => 8.16,
        ]);
        Anime::create([
            'title' => 'Dragon Ball',
            'poster' => 'https://cdn.myanimelist.net/images/anime/5/17407.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Dragon Ball is a renowned anime and manga series created by Akira Toriyama. The story revolves around the adventures of Goku, a Saiyan warrior with superhuman strength, as he embarks on a journey to find the Dragon Balls, mystical orbs that grant wishes when gathered together.',
            'release_date' => '1986-02-26', 
            'countries_id' => 1,
            'rating' => 8.16,
        ]);
        Anime::create([
            'title' => 'Death Note',
            'poster' => 'https://cdn.myanimelist.net/images/anime/9/9453.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Death Note is a gripping and psychological anime and manga series created by Tsugumi Ohba and Takeshi Obata. The story follows Light Yagami, a high school student who discovers a mysterious notebook known as the Death Note. ',
            'release_date' => '2006-10-04', 
            'countries_id' => 1,
            'rating' => 8.63,
        ]);
        Anime::create([
            'title' => 'Fullmetal Alchemist: Brotherhood',
            'poster' => 'https://cdn.myanimelist.net/images/anime/1223/96541.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Fullmetal Alchemist: Brotherhood is a highly acclaimed anime series based on the manga by Hiromu Arakawa. It is a compelling and immersive tale set in a world where alchemy, the art of manipulating matter, is practiced. ',
            'release_date' => '2009-04-05', 
            'countries_id' => 1,
            'rating' => 9.19,
        ]);
        Anime::create([
            'title' => 'Fullmetal Alchemist',
            'poster' => 'https://cdn.myanimelist.net/images/anime/1223/96541.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Fullmetal Alchemist is an acclaimed anime series based on the manga by Hiromu Arakawa. It follows the story of the Elric brothers, Edward and Alphonse, who use alchemy in their quest to restore their bodies after a failed alchemical experiment. Set in a world where alchemy is a widely practiced science, the series explores themes of loss, redemption, and the human condition.',
            'release_date' => '2003-10-04', 
            'countries_id' => 1,
            'rating' => 8.33,
        ]);
        Anime::create([
            'title' => 'Attack on Titan',
            'poster' => 'https://cdn.myanimelist.net/images/anime/10/47347.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Attack on Titan is a gripping and intense anime series based on the manga by Hajime Isayama. It takes place in a world where humanity is on the brink of extinction due to the existence of giant humanoid creatures called Titans. The story follows Eren Yeager and his friends Mikasa Ackerman and Armin Arlert as they join the fight against the Titans and uncover the mysteries surrounding their origins.',
            'release_date' => '2013-04-07', 
            'countries_id' => 1,
            'rating' => 8.48,
        ]);
        Anime::create([
            'title' => 'Hunter x Hunter',
            'poster' => 'https://cdn.myanimelist.net/images/anime/11/33657.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Hunter x Hunter is a highly acclaimed anime series based on the manga written by Yoshihiro Togashi. It follows the story of a young boy named Gon Freecss, who embarks on a journey to become a Hunter—a prestigious and elite group of individuals who specialize in a wide range of tasks, from treasure hunting to tracking down dangerous creatures.',
            'release_date' => '2011-10-02', 
            'countries_id' => 1,
            'rating' => 9.09,
        ]);
        Anime::create([
            'title' => 'My Hero Academia',
            'poster' => 'https://cdn.myanimelist.net/images/anime/10/78745.jpg',
            'genres_id' => 1,
            'synopsis' =>  'My Hero Academia is a popular anime series based on the manga by Kohei Horikoshi. It is set in a world where individuals with superhuman abilities, known as "Quirks," are commonplace. The story follows Izuku Midoriya, a young boy born without a Quirk who aspires to become a hero.',
            'release_date' => '2016-04-03', 
            'countries_id' => 1,
            'rating' => 8.15,
        ]);
        Anime::create([
            'title' => 'Fairy Tail',
            'poster' => 'https://cdn.myanimelist.net/images/anime/5/18179.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Fairy Tail is a popular anime series based on the manga by Hiro Mashima. It is set in the magical world of Earth-land and follows the adventures of a young celestial spirit mage named Lucy Heartfilia after she joins the Fairy Tail guild, a group of powerful wizards known for their camaraderie and reckless nature.',
            'release_date' => '2009-10-12', 
            'countries_id' => 1,
            'rating' => 7.66,
        ]);
        Anime::create([
            'title' => 'Fairy Tail: Final Series',
            'poster' => 'https://cdn.myanimelist.net/images/anime/1536/93863.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Fairy Tail: Final Series is the concluding part of the Fairy Tail anime adaptation, based on the manga by Hiro Mashima. It serves as the final installment, continuing the story of the Fairy Tail guild and its members in the magical world of Earth-land.',
            'release_date' => '2018-10-07', 
            'countries_id' => 1,
            'rating' => 8.13,
        ]);
        Anime::create([
            'title' => 'Sword Art Online',
            'poster' => 'https://cdn.myanimelist.net/images/anime/11/39717.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Sword Art Online is a popular anime series based on the light novel series written by Reki Kawahara. It takes place in a virtual reality MMORPG (Massively Multiplayer Online Role-Playing Game) called Sword Art Online. The story follows protagonist Kazuto Kirigaya, also known as Kirito, and his adventures within the virtual world.',
            'release_date' => '2012-07-08', 
            'countries_id' => 1,
            'rating' => 7.21,
        ]);
        Anime::create([
            'title' => 'Sword Art Online II',
            'poster' => 'https://cdn.myanimelist.net/images/anime/1223/121999.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Sword Art Online II is the second season of the Sword Art Online anime series, continuing the story from where the first season left off. It adapts the Phantom Bullet and Calibur story arcs from the original light novel series by Reki Kawahara.',
            'release_date' => '2014-07-05', 
            'countries_id' => 1,
            'rating' => 7.21,
        ]);
        Anime::create([
            'title' => 'Sword Art Online: Alicization',
            'poster' => 'https://cdn.myanimelist.net/images/anime/11/39717.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Sword Art Online: Alicization is a major story arc within the Sword Art Online anime series. It spans several seasons and adapts the Alicization arc from the original light novel series written by Reki Kawahara.',
            'release_date' => '2018-10-07', 
            'countries_id' => 1,
            'rating' => 7.21,
        ]);
        Anime::create([
            'title' => 'Sword Art Online: Alicization - War of Underworld',
            'poster' => 'https://cdn.myanimelist.net/images/anime/1630/103417.jpg',
            'genres_id' => 1,
            'synopsis' =>  'Sword Art Online: Alicization - War of Underworld is the continuation of the Alicization story arc within the Sword Art Online anime series. It serves as the second part of the Alicization anime adaptation and adapts the later volumes of the original light novel series by Reki Kawahara.',
            'release_date' => '2019-10-13', 
            'countries_id' => 1,
            'rating' => 7.21,
        ]);
    }
}
