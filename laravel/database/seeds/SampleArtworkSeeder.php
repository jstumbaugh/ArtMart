<?php
 
use Illuminate\Database\Seeder;
 
class SampleArtworkSeeder extends Seeder {
	
	/**
	 * Create a set of sample data for development purposes.
	 *
	 * @return void
	 */
	public function run()
	{
		// Sample users; need some artists to post some art!
		DB::table('users')->delete();
		$users = array(
			[ 'id'         => 1
			, 'name'       => 'Eriance'
			, 'email'      => 'eriance@fakemail.net'
			, 'password'   => 'TEST'
			, 'firstname'  => 'Eric'
			, 'lastname'   => 'Ou'
			, 'biography'  => 'I am a sentient mushroom person who makes art and things. To be perfectly frank, this particular biography entry is rather silly, but there needs to be some text here to test out the pages, so here we go! Huzzah!'
			, 'homepage'   => 'http://amuscaria.deviantart.com/'
			, 'avatar_url' => 'http://forum.zdoom.org/download/file.php?avatar=677_1401943690.png'
			],
			[ 'id'         => 2
			, 'name'       => 'Cage'
			, 'email'      => 'cage@fakemail.net'
			, 'password'   => 'TEST'
			, 'firstname'  => 'Aleksander'
			, 'lastname'   => 'Kowalzcyk'
			, 'biography'  => 'THIS SURE IS A USER BIOGRAPHY FOR A PERSON'
			, 'homepage'   => 'http://ccorner.duke4.net/'
			, 'avatar_url' => ''
			],
		);
		DB::table('users')->insert($users);
		
		// Add some sample artwork (and related media).
		DB::table('artworks')->delete();
		$artworks = array(
			[ 'id'          => 1
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Firelance'
			, 'description' => 'Firelance weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 2
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Bloodbane'
			, 'description' => 'Bloodbane weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 3
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Nailgun'
			, 'description' => 'Nailgun weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 4
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Mauler'
			, 'description' => 'Mauler weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 5
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Irebolt'
			, 'description' => 'Irebolt weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 6
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Caster'
			, 'description' => 'Caster weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 7
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Basilisk'
			, 'description' => 'Basilisk weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 8
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Soul Reaver'
			, 'description' => 'Soul Reaver weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 9
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Vorpal Blade'
			, 'description' => 'Vorpal Blade weapon spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 10
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Hornet'
			, 'description' => 'Hornet enemy spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 11
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Guardian'
			, 'description' => 'Guardian enemy spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 12
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Heirophant'
			, 'description' => 'Heirophant enemy spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 13
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Inferno'
			, 'description' => 'Inferno enemy spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 14
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Nightshade'
			, 'description' => 'Nightshade enemy spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 15
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Overlord'
			, 'description' => 'Overlord enemy spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 16
			, 'user_id'     => 1
			, 'license_id'  => 2
			, 'title'       => '[DE] Projectiles'
			, 'description' => 'Miscellaneous projectiles spritesheet from Demon Eclipse.'
			, 'price'       => 0
			],
			[ 'id'          => 17
			, 'user_id'     => 2
			, 'license_id'  => 1
			, 'title'       => '[Enemy] Android'
			, 'description' => 'Android enemy. Purchase for full sprite sheet.'
			, 'price'       => 50
			],
			[ 'id'          => 18
			, 'user_id'     => 2
			, 'license_id'  => 1
			, 'title'       => '[Enemy] Cyborg Mech'
			, 'description' => 'Cyborg Mech enemy. Purchase for full sprite sheet.'
			, 'price'       => 50
			],
			[ 'id'          => 19
			, 'user_id'     => 2
			, 'license_id'  => 1
			, 'title'       => '[Enemy] Thorn Walker'
			, 'description' => 'Thorn Walker enemy. Purchase for full sprite sheet.'
			, 'price'       => 50
			],
		);
		DB::table('artworks')->insert($artworks);
		
		DB::table('media')->delete();
		$media = array(
			[ 'id'         => 1
			, 'artwork_id' => 1
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/dF2buzS.png'
			, 'thumb'      => 'http://i.imgur.com/ktQue46.png'
			],
			[ 'id'         => 2
			, 'artwork_id' => 2
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/Dzi9mV9.png'
			, 'thumb'      => 'http://i.imgur.com/we6hLPG.png'
			],
			[ 'id'         => 3
			, 'artwork_id' => 3
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/Y9VARi3.png'
			, 'thumb'      => 'http://i.imgur.com/zh5RDNC.png'
			],
			[ 'id'         => 4
			, 'artwork_id' => 4
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/czOFgOQ.png'
			, 'thumb'      => 'http://i.imgur.com/qKVAbQy.png'
			],
			[ 'id'         => 5
			, 'artwork_id' => 5
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/zW7LGCQ.png'
			, 'thumb'      => 'http://i.imgur.com/mey7opp.png'
			],
			[ 'id'         => 6
			, 'artwork_id' => 6
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/iyS3MrD.png'
			, 'thumb'      => 'http://i.imgur.com/fLjFzzM.png'
			],
			[ 'id'         => 7
			, 'artwork_id' => 7
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet #1'
			, 'link'       => 'http://i.imgur.com/w8RbGEy.png'
			, 'thumb'      => 'http://i.imgur.com/X1lnUZS.png'
			],
			[ 'id'         => 8
			, 'artwork_id' => 7
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet #2'
			, 'link'       => 'http://i.imgur.com/gFFDRAQ.png'
			, 'thumb'      => 'http://i.imgur.com/PJnq1JO.png'
			],
			[ 'id'         => 9
			, 'artwork_id' => 8
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/zufRy3T.png'
			, 'thumb'      => 'http://i.imgur.com/VfPUNZ6.png'
			],
			[ 'id'         => 10
			, 'artwork_id' => 9
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/jxflxIj.png'
			, 'thumb'      => 'http://i.imgur.com/f8Q5Zlv.png'
			],
			[ 'id'         => 11
			, 'artwork_id' => 10
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/xcVFLDB.png'
			, 'thumb'      => 'http://i.imgur.com/x1jw1ob.png'
			],
			[ 'id'         => 12
			, 'artwork_id' => 11
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/g1XXNRf.png'
			, 'thumb'      => 'http://i.imgur.com/ztygeQI.png'
			],
			[ 'id'         => 13
			, 'artwork_id' => 12
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/fAZlUe5.png'
			, 'thumb'      => 'http://i.imgur.com/y6Y5FYc.png'
			],
			[ 'id'         => 14
			, 'artwork_id' => 13
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/jsbS2CI.png'
			, 'thumb'      => 'http://i.imgur.com/UOuYrOs.png'
			],
			[ 'id'         => 15
			, 'artwork_id' => 14
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/0Jm9L3M.png'
			, 'thumb'      => 'http://i.imgur.com/D2nDZph.png'
			],
			[ 'id'         => 16
			, 'artwork_id' => 15
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/eGTDfr3.png'
			, 'thumb'      => 'http://i.imgur.com/YZkkvw3.png'
			],
			[ 'id'         => 17
			, 'artwork_id' => 16
			, 'type_id'    => 1
			, 'name'       => 'Sprite Sheet'
			, 'link'       => 'http://i.imgur.com/y5gcwnp.png'
			, 'thumb'      => 'http://i.imgur.com/VIVCkm9.png'
			],
			[ 'id'         => 18
			, 'artwork_id' => 17
			, 'type_id'    => 1
			, 'name'       => 'Sprite Preview'
			, 'link'       => 'http://i.imgur.com/VrqQood.png'
			, 'thumb'      => 'http://i.imgur.com/6CBwdAn.png'
			],
			[ 'id'         => 19
			, 'artwork_id' => 18
			, 'type_id'    => 1
			, 'name'       => 'Sprite Preview'
			, 'link'       => 'http://i.imgur.com/PBCEZ3l.png'
			, 'thumb'      => 'http://i.imgur.com/KKRD4Qm.png'
			],
			[ 'id'         => 20
			, 'artwork_id' => 19
			, 'type_id'    => 1
			, 'name'       => 'Sprite Preview'
			, 'link'       => 'http://i.imgur.com/awqnqBU.png'
			, 'thumb'      => 'http://i.imgur.com/3ZKkntM.png'
			],
		);
		DB::table('media')->insert($media);
		
		// Add some tags, since tags are cool.
		DB::table('tags')->delete();
		$tags = array(
			[ 'artwork_id' => 1
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 1
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 1
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 2
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 2
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 2
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 3
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 3
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 3
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 4
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 4
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 4
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 5
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 5
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 5
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 6
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 6
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 6
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 7
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 7
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 7
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 8
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 8
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 8
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 9
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 9
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 9
			, 'name'       => 'weapon'
			],
			[ 'artwork_id' => 10
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 10
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 10
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 11
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 11
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 11
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 12
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 12
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 12
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 13
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 13
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 13
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 14
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 14
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 14
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 15
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 15
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 15
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 16
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 16
			, 'name'       => 'free'
			],
			[ 'artwork_id' => 16
			, 'name'       => 'projectile'
			],
			[ 'artwork_id' => 17
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 17
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 18
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 18
			, 'name'       => 'enemy'
			],
			[ 'artwork_id' => 19
			, 'name'       => 'sprite'
			],
			[ 'artwork_id' => 19
			, 'name'       => 'enemy'
			],
		);
		DB::table('tags')->insert($tags);
	}
}