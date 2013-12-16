<?php

class EnvironmentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('environments')->truncate();

		$environments = array(
			['name'=>'Land'],
			['name'=>'Ocean'],
			['name'=>'Shoreline'],
			['name'=>'Desert'],
			['name'=>'Rivers']
		);

		// Uncomment the below to run the seeder
		DB::table('environments')->insert($environments);
	}

}
