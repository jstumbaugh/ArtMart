<?php
 
use Illuminate\Database\Seeder;
 
class LicenseTableSeeder extends Seeder {
	
	/**
	 * Seed the license table.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('licenses')->delete();
		$licenses = array(
			[ 'id'   => 1
			, 'acro' => ''
			, 'name' => 'All Rights Reserved'
			, 'url'  => ''
			],
			[ 'id'   => 2
			, 'acro' => 'CC BY'
			, 'name' => 'Creative Commons Attribution'
			, 'url'  => 'http://creativecommons.org/licenses/by/4.0/'
			],
			[ 'id'   => 3
			, 'acro' => 'CC BY-SA'
			, 'name' => 'Creative Commons Attribution-ShareAlike'
			, 'url'  => 'http://creativecommons.org/licenses/by-sa/4.0'
			],
			[ 'id'   => 4
			, 'acro' => 'CC BY-ND'
			, 'name' => 'Creative Commons Attribution-NoDerivs '
			, 'url'  => 'http://creativecommons.org/licenses/by-nd/4.0/'
			],
			[ 'id'   => 5
			, 'acro' => 'CC BY-NC'
			, 'name' => 'Creative Commons Attribution-NonCommercial'
			, 'url'  => 'http://creativecommons.org/licenses/by-nc/4.0/'
			],
			[ 'id'   => 6
			, 'acro' => 'CC BY-NC-SA'
			, 'name' => 'Creative Commons Attribution-NonCommercial-ShareAlike'
			, 'url'  => 'http://creativecommons.org/licenses/by-nc-sa/4.0/'
			],
			[ 'id'   => 7
			, 'acro' => 'CC BY-NC-ND'
			, 'name' => 'Creative Commons Attribution-NonCommercial-NoDerivs'
			, 'url'  => 'http://creativecommons.org/licenses/by-nc-nd/4.0/'
			],
			[ 'id'   => 8
			, 'acro' => 'CC0'
			, 'name' => 'Public Domain'
			, 'url'  => 'https://creativecommons.org/publicdomain/zero/1.0/'
			],
		);
		DB::table('licenses')->insert($licenses);
	}
}