<?php
 
use Illuminate\Database\Seeder;
 
class MediaTypeTableSeeder extends Seeder {
	
	/**
	 * Seed the license table.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('mediatypes')->delete();
		$mediatypes = array(
			[ 'id'   => 1
			, 'name' => 'image'
			],
			[ 'id'   => 2
			, 'name' => 'audio'
			],
			[ 'id'   => 3
			, 'name' => 'text'
			],
		);
		DB::table('mediatypes')->insert($mediatypes);
	}
}