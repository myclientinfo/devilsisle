<?php

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('categories')->truncate();

		$categories = array(
			[
				'name'=>'Spiders', 
				'slug'=>'spiders',
				'description'=>'Almost all spiders are venomous. But for the most part their venom has little or no effect on humans. There are only a few types of spiders that have venom that’s considered “medically significant”, or that will have any chance of causing more than trivial pain or sickness. In Australia, those specific spiders are the Redback Spider, the Mouse Spider, and the Sydney Funnel Web. That said, no one has died of any form of spider bite in Australia since the 1950s.
'
			],
			[
				'name'=>'Snakes', 
				'slug'=>'snakes',
				'description' => 'Snakes and [spiders](/Animals/spiders) are the two types of animals from Australia that most people fear. Of those, only snakes are a legitimate threat. Several species, the Tiger Snake, Taipan, and Eastern Brown account for almost all fatalities in Australia, being common, aggressive and highly venomous.'
			],
			[
				'name'=>'Reptiles', 
				'slug'=>'reptiles',
				'description'=>'Australian crocodiles are broken into two main species, fresh water and salt water. Fresh water crocodiles are smaller and won’t kill and eat you. Salt water crocodiles are large, and if they can, certainly will.'
			],
			[
				'name'=>'Jellyfish', 
				'slug'=>'jellyfish',
				'description'=>'There are a hell of a lot of species of Jellyfish in the world, and the vast majority of them are pretty stingy. On a human, most of the effects will run from a mild irritation to an electric-shock-like burning pain. Unfotunately Australia has some of the worst examples of Jellyfish bastardry to be found anywhere in the world. There is also a the Portuguese Man o War included here just because it seemed logical even though it’s not technically a jellyfish.'
			],
			[
				'name'=>'Fish', 
				'slug'=>'fish',
				'description'=>''
			],
			[
				'name'=>'Arachnids', 
				'slug'=>'arachnids',
				'description'=>'Though technically spiders should be in this group, they’ve been given their own separate category. So the only truly bad thing left is the Paralysis Tick, a species which is so common it has killed 20 people so far, and probably a takes out a pet almost every day.'
			],
			[
				'name'=>'Insects', 
				'slug'=>'insects',
				'description'=>'Despite the seeming lack of dangerous animals, it’s actually insects that are responsible for the most animal related deaths in Australia, and in the rest of the world as well. Several people a year in Australia die from bee stings, as up to 3% have an allergic reaction to them, which can be life-threatening.'
			],
			[
				'name'=>'Other', 
				'slug'=>'other',
				'description'=>''
			],
			[
				'name'=>'Birds', 
				'slug'=>'birds',
				'description'=>''
			],
			[
				'name'=>'Mammals', 
				'slug'=>'mammals',
				'description'=>''
			],
		);

		// Uncomment the below to run the seeder
		DB::table('categories')->insert($categories);
	}

}
