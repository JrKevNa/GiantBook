<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('Books')->insert([
            [
                // sci fi, romance
                'publisher_id' => '1',
                'title' => 'Barbarian Lover',
                'author' => 'Ruby Dixon',
                'year' => '2022',
                'synopsis' => 'As one of the few humans stranded on the ice planet, I should be happy that I have a new home. Human women are treasured here, and one alien in particular has made it clear that he wants me. Its hard to push away the sexy, flirtatious Aehako, when all I want to do is grab him by his horns and insist he take me to his furs.

                But Ive got a terrible secret - the aliens who abducted me are back, and thanks to the translator in my ear, they can find me. My presence here endangers everyone... but can I give up my new life and the man I want more than anything?',
                'image' => '26185583._SX318_.jpg'
            ],
            [
                // fairy tale
                'publisher_id' => '2',
                'title' => 'Peter Pan',
                'author' => 'James Matthew Barrie',
                'year' => '1904',
                'synopsis' => 'Author James Matthew Barrie adapted his 1904 play Peter Pan; or, the Boy Who Wouldnt Grow Up to novel in 1911 with the hit Wendy and Peter, known today simply as the timeless classic Peter Pan. The mischievous character Peter Pan first appeared in Barries 1902 novel The Little White Bird and later in the 1906 novel Peter Pan in Kensington Gardens. Barries works explore themes of coming-of-age, the importance of imagination, the clash of fantasy and reality, the power of maternal love, and more. Since its debut, Peter Pan has captured the adoration of children and adults alike.',
                'image' => '294ffcae-3dde-43e6-8375-ae7c9ab0edbd.jpg'
            ],
            [
                // romance
                'publisher_id' => '3',
                'title' => 'Vision in White',
                'author' => 'Nora Robert',
                'year' => '2009',
                'synopsis' => 'After years of throwing make-believe weddings in the backyard, flowers, photography, desserts, and details are what these women do best: a guaranteed perfect, beautiful day full of memories to last the rest of your life.

                With bridal magazine covers to her credit, Mackensie "Mac" Elliot is most at home behind the camera—ready to capture the happy moments she never experienced while growing up. Her father replaced his first family with a second, and now her mother, moving on to yet another man, begs Mac for attention and money. Macs foundation is jostled again moments before an important wedding planning meeting when she bumps into the bride-to-be brother...an encounter that has them both seeing stars.

                Carter Maguire is definitely not her type: he is stable, and he is safe. He is even an English teacher at their high school alma mater. There is something about him that makes Mac think a casual fling is just what she needs to take her mind off dealing with bridezillas and screening her mother phone calls. But a casual fling can turn into something more when you least expect it. And with the help of her three best friends—and business partners—Mac must learn how to make her own happy memories.',
                'image' => '5598113.jpg'
            ],
            [
                // romance fairy tale
                'publisher_id' => '2',
                'title' => "Heart's Blood",
                'author' => 'Jeffe Kennedy',
                'year' => '2016',
                'synopsis' => 'Whistling Tor is a place of secrets, a mysterious, wooded hill housing the crumbling fortress of a chieftain whose name is spoken throughout the district in tones of revulsion and bitterness. A curse lies over Anluan family and his people; those woods hold a perilous force whose every whisper threatens doom.

                For young scribe Caitrin it is a safe haven. This place where nobody else is prepared to go seems exactly what she needs, for Caitrin is fleeing her own demons. As Caitrin comes to know Anluan and his home in more depth she realizes that it is only through her love and determination that the curse can be broken    and Anluan and his people set free.',
                'image' => '6278019.jpg'
            ],
            [
                // sci-fi
                'publisher_id' => '3',
                'title' => "Heir to the Empire",
                'author' => 'Timothy Zahnn',
                'year' => '1991',
                'synopsis' => 'It is a time of renewal, five years after the destruction of the Death Star and the defeat of Darth Vader and the Empire.

                But with the war seemingly won, strains are beginning to show in the Rebel Alliance. New challenges to galactic peace have arisen. And Luke Skywalker hears a voice from his past. A voice with a warning. Beware the dark side….

                The Rebel Alliance has destroyed the Death Star, defeated Darth Vader and the Emperor, and driven the remnants of the old Imperial Starfleet back into barely a quarter of the territory that they once controlled. Leia and Han are married, are expecting Jedi twins, and have shouldered heavy burdens in the government of the new Republic. And Luke Skywalker is the first in a hoped-for new line of Jedi Knights.

                But thousands of light years away, where a few skirmishes are still taking place, the last of the Emperor warlords has taken command of the remains of the Imperial fleet. He has made two vital discoveries that could destroy the fragile new Republic—built with such cost to the Rebel Alliance. The tale that emerges is a towering epic of action, invention, mystery, and spectacle on a galactic scale—in short, a story that is worthy of the name Star Wars.\n\n',
                'image' => '40604754.jpg'
            ],
            [
                // fairy tale
                'publisher_id' => '1',
                'title' => "School for Good and Evil",
                'author' => 'Soman Chainani',
                'year' => '2013',
                'synopsis' => 'The first kidnappings happened two hundred years before. Some years it was two boys taken, some years two girls, sometimes one of each. But if at first the choices seemed random, soon the pattern became clear. One was always beautiful and good, the child every parent wanted as their own. The other was homely and odd, an outcast from birth. An opposing pair, plucked from youth and spirited away.

                This year, best friends Sophie and Agatha are about to discover where all the lost children go: the fabled School for Good & Evil, where ordinary boys and girls are trained to be fairy tale heroes and villains. As the most beautiful girl in Gavaldon, Sophie has dreamed of being kidnapped into an enchanted world her whole life. With her pink dresses, glass slippers, and devotion to good deeds, she knows she’ll earn top marks at the School for Good and graduate a storybook princess. Meanwhile Agatha, with her shapeless black frocks, wicked pet cat, and dislike of nearly everyone, seems a natural fit for the School for Evil.

                But when the two girls are swept into the Endless Woods, they find their fortunes reversed—Sophie’s dumped in the School for Evil to take Uglification, Death Curses, and Henchmen Training, while Agatha finds herself in the School For Good, thrust amongst handsome princes and fair maidens for classes in Princess Etiquette and Animal Communication. But what if the mistake is actually the first clue to discovering who Sophie and Agatha really are…?',
                'image' => '42080479.jpg'
            ],
            [
                // sci fi
                'publisher_id' => '3',
                'title' => "Dune",
                'author' => 'Frank Herbert',
                'year' => '1965',
                'synopsis' => 'Set on the desert planet Arrakis, Dune is the story of the boy Paul Atreides, heir to a noble family tasked with ruling an inhospitable world where the only thing of value is the “spice” melange, a drug capable of extending life and enhancing consciousness. Coveted across the known universe, melange is a prize worth killing for...

                When House Atreides is betrayed, the destruction of Paul’s family will set the boy on a journey toward a destiny greater than he could ever have imagined. And as he evolves into the mysterious man known as Muad’Dib, he will bring to fruition humankind’s most ancient and unattainable dream.',
                'image' => 'OIP-_4_.jpg'
            ],
            [
                // fairy tale
                'publisher_id' => '3',
                'title' => "Into The Riverlands",
                'author' => 'Nghi Vo',
                'year' => '2022',
                'synopsis' => 'Wandering cleric Chih of the Singing Hills travels to the riverlands to record tales of the notorious near-immortal martial artists who haunt the region. On the road to Betony Docks, they fall in with a pair of young women far from home, and an older couple who are more than they seem. As Chih runs headlong into an ancient feud, they find themselves far more entangled in the history of the riverlands than they ever expected to be.

                Accompanied by Almost Brilliant, a talking bird with an indelible memory, Chih confronts old legends and new dangers alike as they learn that every story—beautiful, ugly, kind, or cruel—bears more than one face.',
                'image' => '59807976.jpg'
            ],
            [
                // fairy tale romance
                'publisher_id' => '2',
                'title' => "The Cruel Prince",
                'author' => 'Holly Black',
                'year' => '2018',
                'synopsis' => 'Jude was seven when her parents were murdered and she and her two sisters were stolen away to live in the treacherous High Court of Faerie. Ten years later, Jude wants nothing more than to belong there, despite her mortality. But many of the fey despise humans. Especially Prince Cardan, the youngest and wickedest son of the High King.

                To win a place at the Court, she must defy him–and face the consequences.

                As Jude becomes more deeply embroiled in palace intrigues and deceptions, she discovers her own capacity for trickery and bloodshed. But as betrayal threatens to drown the Courts of Faerie in violence, Jude will need to risk her life in a dangerous alliance to save her sisters, and Faerie itself.',
                'image' => '26032825.jpg'
            ],
            [
                // sci fi romance
                'publisher_id' => '2',
                'title' => "Grim",
                'author' => 'M.K. Eidem',
                'year' => '2013',
                'synopsis' => 'King Grim Vasteri is the strongest and most feared warrior in the Tornian Empire, King of Luda, blood brother to the Emperor, but his line will die with him as no female would join with him, for once he was scarred, he was considered "unfit".

                The Tornian Empire has been dying ever since the great infection caused the birth of females to become a rarity. Since then they have been searching the known universes for compatible females. The Emperor discovery of a compatible female on a slave ship changed that. He would ordered Grim to find his Empress home world so more "unprotected" females could be obtained, knowing Grim would never be allowed to Join with one.

                Lisa Miller is a widowed mother of two little girls, Carly and Miki. Her husband died just a year ago, after a long battle with cancer and she misses him immensely. Friends want her to start dating again but in her heart, she knows there is not a man on the planet she could love like her Mark. Who could love their girls like their own. Therefore, she will stay alone.

                When Lisa is discovered "unprotected" at her husband grave, she wakes on an alien ship heading for an alien world. Refusing to accept this she confronts the large males, demanding she be returned to her children. Seeing his chance to have a female, Grim agrees to accept and protect her offspring, if she agrees to Join with him and only him. Realizing this is the only way she can retrieve her children Lisa agrees and the Tornian Empire changes forever.',
                'image' => '18468256.jpg'
            ]
        ]);
    }
}
