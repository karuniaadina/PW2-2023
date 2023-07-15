<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([
            'name' => 'Action',
            'description' => 'Action anime usually involve a fairly straightforward story of good guys versus bad guys, where most disputes are resolved by using physical force. It often contains a lot of shooting, explosions and fighting.'
        ]);
        Genres::create([
            'name' => 'Adventure',
            'description' => 'Adventure anime usually features a main protagonist who sets out on a journey and commits heroic deeds along the way, typically to achieve some sort of goal.'
        ]);
        Genres::create([
            'name' => 'Comedy',
            'description' => 'Comedy anime are usually silly and whimsical, and can even parody other genres, commonly having an abrupt ending.'
        ]);
        Genres::create([
            'name' => 'Drama',
            'description' => 'Drama anime heavily emphasize their characters’ emotional development. Whether by experiencing the protagonist’s emotional turmoil, or by watching events unfold from a distance, witnessing the characters’ suffering can tear at the viewer’s heartstrings.'
        ]);
        Genres::create([
            'name' => 'Fantasy',
            'description' => 'Fantasy anime take place in a broad range of settings influenced by mythologies, legends, or popular and defining works of the genre such as The Lord of the Rings. They are generally characterized by a low level of technological development, though fantasy stories can just as easily take place in our modern world, or in a Post-apocalyptic society where technology was buried alongside the old world.'
        ]);
        Genres::create([
            'name' => 'Horror',
            'description' => 'Horror anime create an atmosphere of unease. Like Mystery anime, they encourage viewers to learn more about their world... but there may be secrets that are better left unexplored. Through eerie music and sounds, visceral or disturbing imagery, or startling moments, works of Horror make you worry about what gruesome thing is coming next.'
        ]);
        Genres::create([
            'name' => 'Mecha',
            'description' => 'Mecha anime, known in Japan as robot anime, are anime that feature robots (mecha) in battle, and it is broken down into two subcategories of Super Robot and Real Robot. Super Robot and Real Robot are both subgenres of mecha anime. Super Robot focuses more on the super-sized, implausible robots, while Real Robot focuses more on the smaller, more plausible robots.'
        ]);
        Genres::create([
            'name' => 'Music',
            'description' => 'Music anime focus on the characters’ careers, or on their devotion to music. They showcase the talents and skills of the Protagonist, and are often set in the music industry.'
        ]);
        Genres::create([
            'name' => 'Mystery',
            'description' => 'Mystery anime focus on unresolved questions, and the efforts of characters to discover the answers to them. Whether curious and deadly events are afoot, or some part of the world itself is strange or inexplicable, or someone’s past or identity seems strangely shrouded, these characters are set on learning the truth.'
        ]);
        Genres::create([
            'name' => 'Psychological',
            'description' => 'Psychological anime delve into mental or emotional states of a character in the midst of a difficult situation, letting you observe them change as tension increases. Internal monologues are a common way to let you inside their heads.'
        ]);
        Genres::create([
            'name' => 'Romance',
            'description' => 'Romance anime explore relationships between people, whether they’re nonexistent, old, new, or forgotten. Viewers will often develop a personal attachment to the characters and their relationships with each other.'
        ]);
        Genres::create([
            'name' => 'Sci-Fi',
            'description' => 'Sci-fi anime ask, "what if things were different?" They explore a new world, whether it’s the world of the future or past, a present Earth with a changed history, a land that was previously unknown, or another planet entirely. The genre commonly features humanity’s inquisitiveness and innovation, as they grapple with new technologies, new societies, or new frontiers in Outer Space.'
        ]);
        Genres::create([
            'name' => 'Slice of Life',
            'description' => 'Slice of life anime focus on the everyday lives of ordinary people. Unlike many other genres, the plot is often uneventful, with no goals or aspirations other than the protagonist’s aim to live a normal life.'
        ]);
    }
}
