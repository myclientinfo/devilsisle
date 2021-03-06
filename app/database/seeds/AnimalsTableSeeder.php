<?php

class AnimalsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
	    DB::table('animals')->truncate();

		$animals = array(
            		['name' => 'Sydney Funnel-Web',
            		'slug'=>'sydney-funnel-web',
            		'aka'=>'',
                    'species' => 'Atrax robustus',
                    'description' => 'The Sydney Funnel-web is found around Sydney, Australia, which makes it the 4,627,346th most obnoxious bastard in the general area. The Sydney Funnel Web is one of the few spiders that could be realistically considered dangerous, but as the Brazilian Wandering Spider has venom that can break your dick, the Funnel Web comes in a close second.

It’s always the males that cause problems, and they’re occasionally found in suburban gardens, meandering around looking for females. Basically think of four obnoxious, drunken douchebags at the end of a night on the piss and you’re well on the way to understanding the psychology of the Sydney Funnel Web.

Funnel Webs are old-school spiders. It’s a “mygalomorph”, meaning it’s a bit less evolved than your fancy pants modern spiders. Its huge fangs point straight down, which is why it has rear up terrifyingly in order to strike down, with long fangs can pierce a shoe.

Funnel Webs often wander into backyard swimming pools and can’t get out. The poor human finds dead spider in their pool and fishes it out. Except it’s not dead, they can survice underwater for up to 24 hours, then bite you because they’re assholes. Of course, you might have just gotten in to swim, not seeing the thing lurking on the bottom there...

The male Funnel Web is highly aggressive. When they bite, they inject as much venom as they can. It’s part of their “old-school” nature that they don’t get to choose whether to fake it or not. When they bite, they’re known to grab on, holding their victim and biting repeatedly.

On the plus side, there’s an antivenom for these assholes, and no one’s died from being bitten by one in a long time. They wanted to. But they didn’t.',
                    'short_description' => '',
                    'appearance' => '9',
                    'danger' => '9',
                    'risk' => '9',
                    'category_id' => '1',
                    'environment_id' => '1'
            		],
					['name'=>'Box Jellyfish',
					'slug'=>'box-jellyfish',
					'aka'=>'Sea Wasp, Sea Stingers',
					'species'=>'Chironex fleckeri',
'description' => 'The northern oceans of Australia are home to an asshole on a level few other creatures could match or would want to. The Adolf Hitler of the seas. The Stalinfish.

The Box Jellyfish is among the deadliest animals in the world. A single large one can have enough venom to kill 60 people. Basically the creature floats about in the ocean with a box shaped head trailing up to 3m (nearly 10 feet) of thin tentacles. Naturally the creature is almost completely transparent. So basically it’s like looking at water, only some of the water in that water is death water. Don’t swim through the death water. You’ll know when you’ve swum through the death water because it will feel like like you’ve been punched by fire.

The burning of a Box Jellyfish sting is sheer screaming agony, and the tentacles will stick and wrap around. The risk level of the sting comes down to how much contact the tentacles made. A single short tentacle on a leg is not too big a deal. In the sense that you will eventually stop screaming. All the tentacles from a large one wrapped around the body? That’s a bad time. Thankfully not a long time - death can occur within a few minutes, and the victim sometimes has a heart attack before being able to get to shore. So that’s a plus. I suppose.

The first treatment is salad dressing. Vinegar is poured on the tentacles to stop them stinging, then they’re carefully pulled off with a gloved hand or tweezers. There is an antivenom that can help if an ambulance can get to the patient. But the remainder of the treatment is basically a valiant medical team fending off the grim reaper with a broom as the patient repeatedly dies.

In early 2000 a 17 year old Australian boy decided to drink a glass of water from the fridge at his local surf lifesaving club. What he didn’t realise was that there was a box jellyfish in the water. In the fridge. Because that’s where you keep it. He swallowed it, or at the very least a part of it. I can’t find the reports to back this up, but from memory he died 18 times. He’s fine now, except for the permanent scarring in his throat.

The Box Jellyfish has other names. It’s referred to in some places as the “Sea Wasp”, or worse still “Stingers”, in a bit of understatement matched only by the Irish Troubles.  Swimmers and surfers in Northern Australia wear pantyhose, which surprisingly effective at stopping the venom cells firing off. Even among the most conservative people in the country, moderate cross dressing is a totally acceptable alternative to an agonising death.

Box Jellyfish are known to have killed more than 60 people in Australia. That’s over a pretty long time, though, one every two years or so. Barely a problem. Go have a swim.',
					'short_description'=>'',
					'appearance'=>'6',
					'danger'=>'10',
					'risk'=>'8',
					'category_id'=>'4',
					'environment_id'=>'2'
					],
					['name'=>'Irukandji Jellyfish',
					'slug'=>'irukandji',
					'aka'=>'',
					'species'=>'Carukia barnesi',
					'description'=>'The [Box Jellyfish](/Animals/jellyfish/box-jellyfish) is a complete asshole, but even that looks like goddamn kitten compared to the Irukandji. There are a lot fewer deaths from Irukandji than Box Jellyfish: only two confirmed, compared to more than 60.

But sometimes it’s not about numbers. And it’s about size, either. The cubic head is only the size of a fingernail. It’s one of the smallest Jellyfish in the world. It’s not the amount of venom injected either. While the tentacles of a Box Jellyfish sting all along the surface that makes contact with the skin, an Irukandji stings only from the very tips.

No, what the Irukanji has to offer is horror. Stings by the Irukandji are unspeakably painful. One woman described the experience by saying that the pain came in waves, and that the pain of childbirth was around the same as the LOWEST level of pain. And this was at an extreme dosage of morphine.

But no. That’s not enough. There’s also Impending Doom.

Impending doom is an unusual symptom of Irukandji Syndrome, where the victim feels a rising terror, fear of an unknown threat. This dread is so powerful that it’s not uncommon for sufferers to ask their doctor to kill them, as they’re sure they’re going to die anyway. There is a theory that people with minor stings have tried to escape the monster they sense coming for them, and swum off to their death, drowning.

The agony of being stung by these hellspawn lasts for more than a day, and symptoms can linger for weeks.

A lot of our knowledge of Irukanji venom comes from a number of researchers who were stung by Irukanji on purpose. This includes Jack Barnes, who first confirmed this monster was the cause of the syndrome by putting one on his arm. I assume as soon as he did it he yelled to the camera “and this is Jackass”. The species is now either named after him or classic Australian blue collar rocker Jimmy Barnes.',
					'short_description'=>'',
					'appearance'=>'6',
					'danger'=>'9',
					'risk'=>'8',
					'category_id'=>'4',
					'environment_id'=>'2'
					],
					['name'=>'Bluebottle Jellyfish',
					'slug'=>'bluebottle',
					'aka'=>'Portuguese Man o’ War, Blue Stinger, Man-Of-War',
					'species'=>'Physalia physalis',
					'description'=>'Look, I’m just going to come out and say it first up. This is the wrong category. This thing is not a jellyfish. It looks like a jellyfish, and most people think it’s a jellyfish. This is where people are going to look for it. It’s not a jellyfish - a single animal - but a colony of different tiny animals, each with their job to do.

Basically a Bluebottle is a really angry, floating apartment building.

They’re also known as the Portuguese man o’ war for reasons that have sadly nothing to do with their epic 80s classic metal stylings. They float around, being pushed around by the tide and winds, trailing long tentacles into the water, snagging fish and other goodies.

Unfortunately for humans, being blown around means they often end up in shallow waters, where they get stuck onto people, sometimes in pretty large numbers. There are more than 10,000 stings by these assholes every year in Australia, often from people stepping on them when they’ve been washed up on the beach. Though there has been at least one death recorded by them (in Florida, actually) they’re usually not fatal.

Of course, they’re still a screaming agony. Let’s not pretend they’re part of a fun day at the beach. Stepping on one is basically like stepping on a hot coal, if a hot coal was long and sticky, and wrapped around your foot. Do not pee on someone who has just been stung by one. It doesn’t do anything. If you know that’s the sort of thing they’re into then it’s fine, but now is probably not the time.

Bluebottles are also called “stingers”, a name also used for the vastly deadlier [Box Jellyfish](/Animals/jellyfish/box-jellyfish). They’re not that dangerous. But they’re no day at the beach.',
					'short_description'=>'',
					'appearance'=>'6',
					'danger'=>'3',
					'risk'=>'5',
					'category_id'=>'4',
					'environment_id'=>'2'
					],
					['name'=>'Golden Orb-weaver',
					'slug'=>'golden-orb-weaver',
					'aka'=>'Golden Orb Web Weaver',
					'species'=>'Nephila genus',
'description'=>'There are few animals in Australia more terrifying. Most people don’t like spiders anyway, and these guys… they can get big. A full-sized female of some species can get up to nearly two and a half centimetres in that big fat body alone, plus plenty more from long, knobbly nightmarish legs.

These spiders don’t do themselves any favours. There are photos of them on the internet, confirmed pictures of them eating small birds they’ve caught, or even in some cases small snakes. There is no excuse for that sort of nonsense.

The other major problem with them is their webs. Nephila spiders make very large webs. These sometimes stretch between buildings, and deciding to block a walking path is not uncommon. The webs are impressively strong to the point of being hard for even a human to walk through, and the knowledge that there’s likely to be a giant spindley arachnid of terror in there really puts a cherry on the top of the horror cake.

These are common. Not just “around”, but there are millions of them. Most places in Australia it wouldn’t be a challenge to find one within 100m. City or country. And in some places you wouldn’t just find one. They build webs on each other’s webs. They form communities of hundreds of terrifying spiders.

Basically, the Golden Orb-weaver is the sort of thing that makes wussier countries want to turn our wide, flat land into a sheet of smoking glass to prevent them coming out.

So obviously these are dangerous, with venom that can take down a water buffalo?

Nope. Not in any way. Like most spiders its venom is not harmful to people, and will produce a mild burning at worst. They’re also extremely placid, very hesitant to bite at all.

These spiders eat insects, including harmful ones. They’re entirely beneficial.

There are lots of nasty things in Australia, including some absolute horrors. That’s what this site is all about. But there are also plenty of things in Australia that get a really bad rap. They don’t need to be burned with fire. They aren’t a “nope”. Just critters going about their daily lives. It’s not their fault that we think they’re gross.

And Jesus Hillary Christ are they gross.',
					'short_description'=>'',
					'appearance'=>'10',
					'danger'=>'1',
					'risk'=>'1',
					'category_id'=>'1',
					'environment_id'=>'1'
					],
					['name'=>'Saltwater Crocodile',
					'slug'=>'saltwater-crocodile',
					'aka'=>'Estuarine Crocodile, Indo-Pacific crocodile',
					'species'=>'Crocodylus porosus',
'description'=>'One of the few advantages Australia has over other countries is that where there’s no shortage of things that want to kill you, almost none of them will actually eat you. This is about the only exception.

Saltwater Crocodiles have been confirmed and recorded measuring 7 metres (23 feet) and weighing more than two metric tons (4,400lb). Reports of ones measuring 10m have not been confirmed.

Saltwater crocodiles are the bitingest animals in the world. The bite of a large crocodile can crush the skull of cow. People often say they have “razor sharp teeth”. This is obviously bullshit. Crocodile teeth aren’t even particularly sharp. Puppies have sharp teeth. Crocodile teeth are crap. You don’t really need particularly sharp teeth when you can **crush the skull of a cow**. Basically as long as you can get a grip it’s pretty much over bar the agonising death.

Saltwater crocodiles are ambush predators. They hang around with just their eyes and nose poking out of the water, and they’re clearly just a log. No harm here. Of course, as soon as something comes near enough they leap out, grab it, pull it down, and drown it. They can swim three times faster than an Olympic swimmer, doping or not, and are more or less invisible in the water.

They don’t just kill, either, they make it fun. Saltwater crocodiles are well known for something called the “death roll”. Basically they get a good grip on something and twist their body over and over, drowning whatever is in their mouths. If it’s still moving, just do it again. It’s also a multi-purpose skill. Since they have shitty teeth, crocodiles can’t bite things well. If they want a bite of something they grab a limb and then death roll with it until it comes off. Usually they just leave their victim wedged under a log or something so they get nice and… soft.

The most savage attack ever from Crocodiles occured during WWII on an island near Fiji. British soldiers surrounded Japanese troops in a mangrove swamp infested with salties. Overnight, hundreds of Japanese soldiers were taken by the crocodiles.

Salties kill one or two people a year in Australia. Usually people doing reckless things, like getting a drink of water, or enjoying a lovely camp. Like with most of Australia’s horrible things, the further north you go, the more of them are likely to be around.',
					'short_description'=>'',
					'appearance'=>'8',
					'danger'=>'9',
					'risk'=>'7',
					'category_id'=>'3',
					'environment_id'=>'4'
					],
					['name'=>'Cassowary',
					'slug'=>'cassowary',
					'aka'=>'',
					'species'=>'Casuarius casuarius',
					'description'=>'I asked a friend of mine what his most feared Australian animal was and his reaction was instant enough to surprise me: the Cassowary. Why? “Because it’s got an axe for a head and can kick you to death."

It’s hard to argue with that. The Cassowary is the second largest bird in the world, if you go by weight. (The Emu is a little taller.) A full sized female adult Southern Cassowary is rocking as much as 85kg (nearly 190lb) of feathery terror, and stands nearly two metres tall.

The axe head is probably the most prominent thing about them, and that’s saying something for a 2m tall bird with a bright blue face. On top of their head is a bony plate up to 18cm tall. It looks like a weapon, but it’s not. It’s not entirely clear what it’s for, but it’s not “an axe”. It may be a helmet to stop fruit falling on their head or them smacking into things as they run through the rainforest. (These are genuine issues in a cassowary’s life.) It may be that it’s also for shedding heat. The Southern Cassowary lives in the very north of Australia because they’re shit at geography. It’s hotter than hell up there and getting rid of some heat is not a bad idea.

But they’re not without weaponry. A cassowary’s foot has a 13cm (5 inch long) spike on it, and it’s disturbingly sharp. They’ve got a permanent dagger sticking out of their foot, like that asshole in Roadhouse.

They’re willing to use them. While naturally they’re timid and usually hide before they’re ever seen, humans feeding them has made them bold, and sometimes aggressive.

Their dagger foot can lash out, slashing open a person’s stomach or cutting an artery. While injuries are fairly common, fatalities are rare. One of the few well-documented cases was in 1926 when two brothers ran across one and were attacked. One of them was knocked to the ground and the other was knocked to the ground *then* kicked in the throat. His throat was severed and he died almost instantly. Like that other asshole in Roadhouse.

Of course, the boys didn’t just “run across it”. They heard it was there, and decided to get some sticks and beat it to death. So frankly, screw them, I’m glad he died.

This is not unusual, of course. 75% of animal attacks in Australia are from people trying to kill or catch things. The same rules apply to Cassowaries that apply to pretty much everything else horrible in Australia. Don’t try to kill them, don’t try to catch them. 

And definitely don’t try to cook them. Cassowary recipes say to include a medium sized stone in with the bird. When the rock is soft, the cassowary should be, too.

Because humans suck they’re running out of places to live and tend to get hit by cars a lot. As a result cassowaries are endangered. A recent cyclone in their home range killed as many as 10% of the remaining population.',
					'short_description'=>'',
					'appearance'=>'3',
					'danger'=>'4',
					'risk'=>'4',
					'category_id'=>'9',
					'environment_id'=>'1'
					],
					['name'=>'Blue Ringed Octopus',
					'slug'=>'blue-ringed-octopus',
					'aka'=>'',
					'species'=>'Hapalochlaena lunulata',
					'description'=>'Some of Australia’s deadly things are hideous. Some of Australia’s hideous things are totally safe. But this one is downright adorable. Too many bad cartoons have given us the impression that octopus are big creatures, but the vast majority of them are smaller than a grapefruit. The Blue Ringed Octopus is small even by actual octopus standards, rarely bigger than a golf ball.

The dominant feature of these guys is obviously going to be the blue rings. Bright, glowing, electric blue rings pulse and shimmer when the octopus is annoyed. Don’t annoy them.

The other interesting feature of these species is that they’re deadly hellspawn. Actually it’s been recently found that **all** octopus are at least a little venomous. But only the Blue Ringed variety get to put “deadly as all get out“ on their resume. When these octopuses bite they inject a venom filled saliva. Actually I should go back before I get emails - octopuses is correct, octopii is not. The word is not Latin, it’s Greek, so the rules are different. Anyway, these guys use a neurotoxin called tetradotoxin, the same nasty stuff that makes pufferfish a poor choice for a fly up. In both pufferfish and Blue-Ringed Octopus it’s not the animal that makes the poison, it’s bacteria the animal made a deal with.

I once read some detailed instructions in the care and keeping of the Blue-Ringed Octopus. It consisted of the word “Don’t”. It followed that up with further information: “Seriously. Don’t. You’ll die."

Oddly enough, the bite is painless. Then after a few minutes it stops all of the nerves working. Some of these nerves are actually quite useful, and in particular the ones related to breathing have been long regarded as favourites. Paralysis sets in, leaving the victim unable to move or breathe. This is a devastating problem if swimming, but let’s be honest, it’s not great on land either. Naturally, the affected person will remain completely conscious while their body shuts down and they suffocate to death. Because screw you.

There is no antivenom. Treatment involves assisting with breathing while the body breaks down the toxins over the course of 24 hours or more. A single octopus has enough venom on board to bite and kill 25 people. They are on the short list, among the 5 most deadly animals in Australia.',
					'short_description'=>'',
					'appearance'=>'3',
					'danger'=>'10',
					'risk'=>'9',
					'category_id'=>'8',
					'environment_id'=>'2'
					],
					['name'=>'Eastern Brown Snake',
					'slug'=>'eastern-brown-snake',
					'aka'=>'Common Brown Snake, Brown Snake',
					'species'=>'Pseudonaja textilis',
					'description'=>'What a boring name. Who did that? Hey look, it’s a new type of snake, what should we call it? I dunno, what colour is it? Australia is rubbish for this. We have brown snakes. Green tree snakes. Black snakes. Red-bellied Black snakes. Pathetic effort. *Boomslang*. How great a name is that?! Or the Black Mamba, it’s a colour AND a dance! That’s a lot better. Africa is way better at this.

Oh, also, this is the single deadliest animal in Australia.

We should probably talk about what that means, though. This isn’t the most potent venom, that’s the [Small Scaled Snake, or Inland Taipain](/Animals/snakes/inland-taipan). It’s not the biggest venomous snake. That would be the Mulga Snake. It’s not the most aggressive. That would be either the [Taipan](/Animals/snakes/coastal-taipan) or the [Tiger snake](/Animals/snakes/tiger-snake).

But the Brown Snake is common. The best known species, the Eastern Brown Snake is also called the Common Brown Snake. They’re not called that because they’re so rare. And its venom is incredibly potent. When the late, great Steve Irwin did a special on the most deadly snakes in the world, for eight of them he didn’t have to leave the country. And one of them, the Brown Snake, he didn’t have to leave the house - he got a call from his wife because there was one in the garage.

Brown Snakes live where people live. They’re encountered quite often, and as a result they’re responsible for more fatalities than any other group of snakes. Like most dangerous animals, 75% of bites are caused by people trying to catch them or kill them. So if you leave them alone you can be in the lucky 25% that just got shat on by life.

Brown snakes are found all over the country, and in a wide range of environments. Basically if there’s food, they’ll be there. They’re particularly fond of mice.

Brown snake venom contains neurotoxins, but also a strong coagulant that turns the blood into a thick sludge startlingly fast. This is not actually good for you.

Antivenom is available and should be administered immediately. Even without treatment only 1/5 people actually die from a brown snake bite, a surprisingly low number because brown snakes try not to inject more than they have to. Venom is hard to make.

Even with the low odds, the use of antivenom and excellent medical treatment, there are still one or two people who die from Brown Snake bites every year in Australia.',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'10',
					'risk'=>'9',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Inland Taipan',
					'slug'=>'inland-taipan',
					'aka'=>'Fierce Snake, Small-scaled Snake',
					'species'=>'Oxyuranus microlepidotus',
					'description'=>'This guy has the single deadliest venom of any snake. In the world. At all. Not just land snakes either. It’s well above any sea snake by double the potency.

The Inland Taipan is a smallish, nondescript snake. It is generally brown, with little patches of brown. In summer it’s a lighter brown, in winter it’s slightly darker brown. What makes this snake exceptional isn’t its mastery of an autumn colour palette, though.

The venom it injects is insane. It is potent enough that the amount injected in a single bite could kill more than 100 full-grown men. That’s twice as many as a Black Mamba, and with a quarter of the amount of venom injected. It’s 30 times more than a King Cobra, which injects **nine times** the venom.

There is one advantage humanity has against the horrifying threat of the Inland Taipan. They live inland. Australia is pretty much a desert ringed with habitable cost, and the Inland Taipan lives in places humans wouldn’t want to. It’s a remote habitat, and they’re never encountered by humans. Unlike the [Coastal Taipan](/Animals/snakes/coastal-taipan), which is an absolute asshole, famous for chasing people just to bite them, the Inland Taipan is shy and timid.

Almost everyone who’s ever been bitten by one has been a keeper of captive specimens for research. The moral of this story is probably that Inland Taipans are a pretty rubbish pet.',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'10',
					'risk'=>'2',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Paralysis Tick',
					'slug'=>'paralysis-tick',
					'aka'=>'Australian Paralysis Tick, That Thing On My Balls',
					'species'=>'Ixodes holocyclus',
					'description'=>'Ticks around the world can spread disease. In America they’re best known as carriers of Lyme Disease. Thankfully Australian Paralysis Ticks don’t carry Lyme disease. They will just paralyse and kill you instead.

All ticks inject a cocktail of weird crap into their host. It’s a mix of stuff to stop blood clotting, but also to stop the host feeling pain, or swelling, etc. Paralysis Ticks just have one extra ingredient - a paralytic neurotoxin.

This venom is not fast-acting. Right at the start the tick doesn’t inject any venom at all, or only a tiny bit. At the earliest only two days in, but after up to a week, the legs weaken. The weakness travels up the body until fully paralysing the victim finishing off with the lungs. Venom can continue acting on the body for up to four days, so getting the critter gone is important. They’re basically hanging there drinking from a pit made into your skin so they can fill up with tasty blood and make a billion babies. So you really don’t want them there.

Paralysis Ticks are not a massive danger to humans. We have a lot of advantages, not least that we’re physically quite large. We can physically check ourselves and aren’t especially hairy. It’s pets who are at the most danger from them. The combination of a small size, thick fur, no hands, and a complete lack of awareness of what’s going on around them means cats and dogs routinely die from tick bites.

Still, it’s not all good for us. 20 people have been killed by Paralysis ticks, though none since 1945 thanks to medical improvements. That’s more than either [Redback Spiders](/Animals/spiders/redback) or [Funnel-Web spiders](/Animals/spiders/sydney-funnel-web). Something to be aware of.

Most deaths aren’t caused by paralysis. They’re caused by allergic reaction to the tick bite. Anaphylactic shock is lethal, and can be exhibited by about 2% of people bitten. About the same percentage that are allergic to bees. This reaction can occur much faster than the week required for paralysis to set in.

In 2002 a 48 year old man presented at an emergency room complaining that he was a bit unsteady on his feet, and his lips were numb. He was found to have more than 40 paralysis ticks scattered across his body, which were carefully removed with tweezers.

That email and Facebook thing about them coming off if you put vaseline or some sort of cream on them is complete BS. Ticks barely need to breathe, and won’t asphyxiate. Pull them out from the head with tweezers. Now. Immediately. They are actively killing you.

Which is really kind of a weird thing to do. It’s not known exactly why a parasite would kill its host. That’s just dumb. It’s believed that it’s an evolutionary adaptation from the time when mega-mammals roamed Australia. Paralytic neurotoxins might have made them a bit more calm and less likely to knock the ticks off before they were finished making babies. Or they might just be assholes. That theory has some merit, too.

Paralysis ticks infest in huge numbers from the very north of Australia to the very south, a thick band along the eastern coast. This band is also know as “the bit people live in”. These aren’t a rare tick. There’s a decent chance of picking one up - not just any old tick, but a paralysis tick - any time you wander through any sort of bush or grassland area. For the love of God, if you go walking in any semi-rural area, check yourself thoroughly. And don’t forget the sack or crack.

It’s not glamorous, but they often like to hide down there, playing with your bits.',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'8',
					'risk'=>'2',
					'category_id'=>'6',
					'environment_id'=>'1'
					],
					['name'=>'Stonefish',
					'slug'=>'stonefish',
					'aka'=>'',
					'species'=>'Synanceia verrucosa',
					'description'=>'Some of the worst of Australian animals give you a fair chance. While it’s possible to just step on a [Brown snake](/Animals/snakes/eastern-brown-snake), you’re usually going to at least see it, and get a chance to wander backwards while filling your pants with a Brown snake of your very own. But the Stonefish… there’s no mystery to how it got its name. The thing looks like a damn rock.

Not just “kind of a bit”. There’s absolutely nothing at all to distinguish the rock of agonizing death from the surrounding rocks of slightly scratchy. If you have the bad luck to not realise that one of the rocks that look exactly like the other rocks happens to have a metabolism then you’re in for a world of pain.

Pain. Literally pain. Just... so much. Stonefish venom is basically concentrated agony so intense that the pain itself can kill by sending the nervous system into shock. As an added bonus, the venom of the stonefish somehow renders pain medication ineffective. Yes, this includes morphine, which seemingly has little to no impact on the sheer screaming agony.

Victims have been known to request amputation of the affected limb to stop the pain, which has been described as being like having every joint repeatedly smashed with a sledgehammer for hours.

Most problems occur in tidal pools, when a wandering person treads on the wrong rock. Impressively, the rock doesn’t even have to be in a pool. The Stonefish can survive being left behind by the tide for up to 24 hours.

Yes, this fish looks exactly like a rock, will kill you in the worst way possible, and could well be actually on land.

Welcome to Australia. Please enjoy your stay.',
					'short_description'=>'',
					'appearance'=>'9',
					'danger'=>'10',
					'risk'=>'8',
					'category_id'=>'5',
					'environment_id'=>'3'
					],
					['name'=>'Stingray',
					'slug'=>'stingray',
					'aka'=>'',
					'species'=>'Pastinachus sephen',
					'description'=>'Steve Irwin wasn’t killed by a Stingray. Steve Irwin was killed by stunningly bad luck. Stingrays don’t often sting. When they do, they usually sting someone who steps on them, which means they stab someone in the leg. They don’t sting people in the heart. Irwin’s (completely understandable) surprise and alarm meant he pulled out the barb, which if left in may have been survivable.

Unfortunately after his death, a number of stingrays were found mutilated on beaches, allegedly killed in "revenge". Because if there was anything Irwin stood for in life it was the senseless slaughter of animals.

The species name given above is a possible match for what actually killed Irwin, but is hardly the only type. There are more than two hundred different species in a number of genus, and they live all around the world.

Most stingray stings, like with Stonefish, occur when a person steps on the camouflaged animal. The spiked tail shoots forwards and stabs the leg or foot. Like a [bee](/Animals/insects/honey-bee), the barbed stinging spike is left in. They are not really like a bee in any other way.

Irwin is not the only nasty attack from stingrays. Not long after his death a ray leapt into the boat of a fisherman off Florida and speared him in the chest. He survived, but had to have surgery to remove pieces of the stinger from his chest. It must have hurt like an absolute bitch.

Stingray venom is a protein, whch means that it can be cooked, so the first treatment for a sting is to heat the wound as much as possible, usually with hot water. This will neutralise the toxin. The same is done for [stonefish](/Animals/fish/stonefish).',
					'short_description'=>'',
					'appearance'=>'4',
					'danger'=>'4',
					'risk'=>'3',
					'category_id'=>'5',
					'environment_id'=>'3'
					],
					['name'=>'Pfeffer’s Flamboyant Cuttlefish',
					'slug'=>'pfeffers-flamboyant-cuttlefish',
					'aka'=>'',
					'species'=>'Metasepia pfefferi',
					'description'=>'Like the Portuguese man o war we should probably make it clear from the outset that this is in the wrong place. This is a cuttlefish, not an octopus. A related group, but not the same thing. A balance has to be found between accuracy and useful groupings of animals.

Anyway, this brightly coloured creature is a cuttlefish. Similar to an octopus, but still having something of an internal shell, something octopus got over ages ago.

Cuttlefish are able to make amazing displays of light and colour with their bodies, and it’s obvious this one isn’t messing around.

The bright colours on this cuttlefish aren’t just a mating display or something, though. They’re a threat. This guy is loaded with tetradotoxin, the same neurotoxin that makes pufferfish deadly poisonous and gives the blue ringed octopus its deadly venom.

This is the difference between that latter and this guy. Venomous and poisonous do not mean the same thing. In general, venom needs to be injected, like that of a snake or spider, while a poisonous animal has to be eaten. Thankfully this cuttlefish is poisonous. You’re in no danger if you don’t eat it.

This means that unlike the Blue-Ringed Octopus, Pfeffer’s Flamboyant Cuttlefish can stay being considered just... fabulous.',
					'short_description'=>'',
					'appearance'=>'1',
					'danger'=>'2',
					'risk'=>'2',
					'category_id'=>'8',
					'environment_id'=>'2'
					],
					['name'=>'Platypus',
					'slug'=>'platypus',
					'aka'=>'Duck-billed Platypus',
					'species'=>'Ornithorhyncus anatinus',
					'description'=>'Much has been made of the weird marvel that is the platypus. Let’s get the cliches out of the way. Yes, it looks like someone stuck a duck’s beak and a swan’s feet on a beaver. Yes, it’s such a weird looking thing that a specimen was rejected by the National Institute of Sciencing And Animals And Shit in London. They’d had a few recent and rather embarrassing hoaxes, you see, and they weren’t going to fall for this duckbeaver nonsense.

The platypus is actually an amazing creature. They’re extremely timid, and almost completely silent, so despite existing over a large chunk of inhabited Australia they’re almost never seen in the wild. Their stupid looking beak is actually an ultrasensitive munchies detector, so they can snuffle through the stuff on the the bottom of the river and detect any tasty morsels like worms or small crustaceans.

There are a lot of particularly excellent things about the Platypus. One is that it’s one of only two mammals that lay eggs, an honour it shares with the Echidna. The reaction to this fact in British Naturalist circles was hilarious. They already had a nice set of rules going on, and then along comes this upstart animal whose biology just didn’t fit their plans. Meetings were had, there was shouting and people saying they won’t stand for this. There was a lot of dispute and disbelief but there comes a point where you just can’t fight it anymore. The scientific community had to accept that this was a mammal that just had absolutely no idea how to be a mammal, and the small group called Monotremes was born. One hole. Biologists can be awkwardly direct sometimes.

The other thing that is particularly excellent about the platypus is that it’s venomous. Yes. Really. It’s a venomous mammal that looks like a duckbeaver and lays eggs. Screw you, any concept of rational classification! Only the males are venomous, and it’s largely a mating rights thing rather than defensive or for food. Actually, as their venomous spine is on their back legs, the fact that they don’t use them to hunt for food means we’ve lost some very excellent video opportunities. The spine is most used when fighting other males for breeding, and they have more venom available in breeding season. 

But they’re not above having a go at a foolish human who picks them up either. The sting from the spur of a platypus is apparently horrifically painful. It is reportedly not unlike being tased. The embarrassment of having to tell your friends that you were attacked by a duckbeaver is probably nearly as painful.

If a platypus attacks it generally slams its back legs together, trapping an unwary arm or leg and driving its spurs in repeatedly. It can and will just hang there if necessary, and will need to be pried off by the now exceptionally unhappy victim.

Though not strong enough to kill a human, they are able to kill smaller animals such as dogs or cats. The contents of the venom are not all that well known, but it’s not unlike snake venom. Though most snake venom has components that break down flesh and thankfully the platypus doesn’t.

Most stings from platypus occured when it was still legal to hunt them for their fur, so who cares about those guys. Occasionally fishermen accidentally catch them and risk a savage spikening.

There is absolutely no chance of being attacked by a platypus in any other situation. They left long before you knew they were there.',
					'short_description'=>'',
					'appearance'=>'1',
					'danger'=>'5',
					'risk'=>'1',
					'category_id'=>'10',
					'environment_id'=>'5'
					],
					['name'=>'Redback Spider',
					'slug'=>'redback',
					'aka'=>'Red-Back Spider, Redback, Jockey Spider (apparently)',
					'species'=>'Latrodectus hasseltii',
					'description'=>'The Redback Spider is another Australian animal that has been named by some highly creative individuals. The thing has a red back. It’s an extremely distinctive marking, an hourglass shape in vivid red on a jet black spider. The spider itself is nothing much to look at. It’s about a centimetre long. It looks like a spider. Eight legs, body in the middle. If it wasn’t for that distinctive marking and the fact that they kill people, they’d be well worth ignoring.

Redback Spiders are a constant menace, and routinely found in homes. They’re responsible for anywhere from two to ten thousand bites every year in Australia, bites which require medical attention and an antivenom that thankfully means no deaths have occurred since its creation in the 50s. 

The antivenom is made by injecting horses with venom, a fairly dickish act that I hope the horses understand is for the greater good. Not their good, but maybe mine.

The Redback is very closely related to the US Black Widow Spider, and their bites are approximately the same in effect though the Redback is stronger. Generally a crappy time is had by all. The bite results in nausea, vomiting, sweating, headaches and occasionally coma and death. Depending on the size of the person bitten, death can take anywhere from a few hours to a month. A horrible, horrible month.

Most adults are not too badly affected, and while the symptoms are extremely unpleasant, they’re not likely to be lethal in an adult. Children are more at risk. As a child I took one to my mother on my hand to get its “booboo” fixed, because I thought the red was some sort of injury. Kids are dumb.

Redbacks live everywhere. They’re commonly found in sheds and similar quiet outdoor areas. The old tradition of having outdoor toilets meant they would often be experienced in quite unacceptable circumstances, and the perception of them as a toilet waiting taint biter remains.

They live in inhabited areas, and are potentially deadly. They’re one of the few actual legitimate threats in Australia. The Redback Spider has killed more people than any other spider in Australia. It’s leading on the Sydney Funnel-web by 16-14, the Funnel-web’s horribly potent venom not able to overcome the Redback’s superior geographical range.

And they’re spreading. They’ve been found in New Zealand, where they compete with the related local Katipo, and even the UK, probably brought in on ships. There’s a permanent population in Osaka, Japan now, a country that has never had a venomous spider before.

If you see one, you have several options. One is to walk away, they’re not at all aggressive and usually just hang out in their webs. The other is to squash the bastard. While all animals have a place on this earth, I won’t tell if you don’t.',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'9',
					'risk'=>'8',
					'category_id'=>'1',
					'environment_id'=>'1'
					],
					['name'=>'Cone Snail',
					'slug'=>'cone-shell',
					'aka'=>'Cone Shell, Cone Shell Snail',
					'species'=>'Conus geographus',
					'description'=>'Oh look, what a pretty shell.

That pretty shell is a Cone Snail, one of a number of related snails that get around looking pretty and harpooning small fish (or sometimes worms, or other snails) with highly modified teeth attached to a venom sac. The fish harpoon is very effective on fish, and not much less effective on people.

Cone shells are sometimes jokingly referred to as “Cigarette Snails”. Because if one stings you, you’ll have time to smoke a cigarette before you die. Jokes are funny.

The venom in these things has a huge variety. Some are a bee sting. Some are a death sentence. One of them turns out to be a better pain killer than morphine, about a thousand times more effective. This is pretty common in nature. A lot of toxins are medicines in the right dosage. There’s a frog poison that’s also vastly more effective than morphine, but the downside is that there’s almost no difference between the dosage for pain-free bliss and the dosage for agonising death, so it can’t be safely used. The downside for Cone Shell venom is that even though it is actually being used now it has to be injected directly into the spine. Which is pretty low on my bucket list.

There is a lot of research being done on using these sorts of venoms to make more effective and side-effect free non-addictive pain medication. 

This one species alone, the Geograpy Cone, is responsible for at least 30 deaths, though few of them were in Australia. Like a lot of Australia’s nastiest beasties, the cone snails live almost entirely in the northern coasts, especially the coast of Far North Queensland. It’s worth pointing out that the picture at the right is not a geographus at all, but a Textile Cone, *Conus textilus*. They’re just easier to find decent pictures of.

Don’t pick up pretty shells from beaches in FNQ. Especially if they look like this picture. If they’re on the sand they could still be alive and full of anger. If they’re in the water while scuba diving or snorkelling they’re almost certainly still alive and full of anger, so leave them very, very alone. They can and will sting through gloves or wetsuits.

Like a lot of other venomous creatures, there is no antivenom. They follow the common neurotoxin pattern of causing numbness and paralysis, eventually leading to paralysis of the respiratory system. That takes some time. But as humans are quite reliant on their respiratory system, this is a very big problem. Medical treatment mostly involves keeping the patient comfortable and (most importantly) breathing while their body breaks down the toxins. It’s very exciting how many Australian animals have that as a medical treatment. A valiant fight against the grim reaper until the patient can stop dying and just get over it. Or just light a cigarette and wait.',
					'short_description'=>'',
					'appearance'=>'1',
					'danger'=>'9',
					'risk'=>'4',
					'category_id'=>'8',
					'environment_id'=>'3'
					],
					['name'=>'Coastal Taipan',
					'slug'=>'coastal-taipan',
					'aka'=>'Taipan, Common Taipan',
					'species'=>'Oxyuranus scutellatus',
					'description'=>'The Coastal Taipan is unfortunately also called the Common Taipan for good reason. They’re a snake often encountered by humans, and are one of the most venomous snakes in the world, fourth in terms of potency of their venom. The Coastal Taipan is related to the vastly more venomous [Inland Taipan](/Animals/snakes/inland-taipan), but unfortunately lacks its placid nature and habitat way away from humans.

The Taipan is extremely aggressive. They are famous for not just biting people, but actively chasing them to bite them again. People bitten by Taipans are often bitten repeatedly as a result, and this means they get large amounts of venom.

One of the fun things about Taipans is that without medical treatment, a bite is fatal almost 100% of the time. Most snake bites should be treated, but it’s more of a “just in case”, many venomous snakes don’t actually even inject venom most of the time. A Taipan always will. A bite from a Taipan almost certainly WILL kill, in about 90 minutes. Sometimes as little as half an hour. 

They are fast, highly aggressive, extremely venomous, and routinely live where people are. There are usually one or two deaths from these animals every year. Taipans are a serious threat. As ever, though, the vast majority of bites are people trying to catch or kill them. So just don’t.

Identifying a Taipan is a difficult skill that involves counting scales on parts of their body and measuring the width of the head. An easier method is to just see if it’s brown. If it’s brown it *might* be a Taipan, Australia’s second most dangerous snake, and that’s enough to be getting on with. It might not be, but if it’s not, it’s probably an [Eastern Brown Snake](/Animals/snakes/eastern-brown-snake), which is Australia’s **most** dangerous snake. Course, it could be a [Tiger snake](/Animals/snakes/tiger-snake)… the third most. Or.. A good rule of thumb is that if the snake is brown, your underpants should be as well.',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'10',
					'risk'=>'9',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Huntsman Spider',
					'slug'=>'huntsman-spider',
					'aka'=>'Giant Nope Spider',
					'species'=>'Beregama aurea',
					'description'=>'Among the most feared and hated of spiders is the Huntsman Spider. The huntsman is not a single spider, it’s a family, containing around 2000 different species. There are lots of different huntsmans, and they have a few things in common. One is that their legs point forwards. Another is that they tend to be big. Like… really big. 

A decent sized one can can be bigger than an outstretched hand. Approximately the correct size to sit right across your entire face. Just so you have a good mental picture.

The largest are 30cm wide, a foot across. Those don’t live in Australia, thankfully, they’re recently discovered in Laos. But the example species used here, the Golden Huntsman, lives in Northern Queensland and gets almost as big, being the largest known before the Laos cave monster.

Most of that size is taken up by legs, long, spindley legs. Not knobbly sticks like the Golden Orb weavers, but thin. Hairy like a tarantula but not fat and heavy. And because they’re not fat and heavy, and because they have such long legs, they are blindingly fast. Keen awareness and lightning reflexes makes them difficult to kill, and they often run behind furniture or other cover. Presumably plotting their revenge.

The Huntsman is a creature of nightmares. They have a habit of walking (or running) up walls and on ceilings, and can appear in inconvenient places, like the back of the toilet door when you close it.

The big question, of course, is obvious. Is it venomous?

And the answer is complex.

Sort of. Really all spiders are venomous, with a few irrelevant exceptions, but only rarely does a spider’s venom have much effect on humans. These are insect neurotoxins, so they’re not really built for giant smelly apes. 

So the huntsman is venomous because it’s a spider. But it is in no way dangerous. Sure it looks dangerous. Sure, sleeping with one on the roof above your bed is about the worst sleep you can have. Sure they’re scary and fast and unpredictable.

They’re not only harmless, they’re beneficial. Hunstman Spiders kill a lot of other nasties, like cockroaches and less pleasant spiders. The vast majority of spiders, including the Huntsman, are harmless. They are feared unjustly and pay for it with their lives. They’re not in any way capable of harming a human.

In fairness it should be said that they **can** bite, and their bite kind of hurts. It can create a localised swelling and itching. But it’s not something you’d need to see a doctor about, nor is it a good reason to be a big girl’s blouse about that big one behind your couch. Oh, you didn’t know it was there? Don’t worry about it then.',
					'short_description'=>'',
					'appearance'=>'10',
					'danger'=>'1',
					'risk'=>'2',
					'category_id'=>'1',
					'environment_id'=>'1'
					],
					['name'=>'Carpet Python',
					'slug'=>'carpet-python',
					'aka'=>'Diamond Python',
					'species'=>'Morelia spilota',
					'description'=>'Pythons in general are largish snakes, and they use their weight and strength to take prey. They have no venom because they don’t need any. A lot of people think pythons and constrictors crush their prey, but they don’t. They just hold on very tight. When the small wallaby, or your nephew Perry, breathes out, the snake simply tightens. It doesn’t need to crush. It just needs to take up the room you just gave it. With the lungs empty and the snake in position, it’s now impossible to inhale.

All that aside, Carpet Pythons are one of the most common snakes in Australia. They’re a routine part of life in the bush, and anyone who lives on a farm or large property has one or two. They’re not as often seen in cities, but they do have a knack for sneaking into birdcages, and then being unable to get back out, thanks to an exciting new bulge in their middle. Coming out to see your precious budgerigar has been replaced by a grumpy snake can be a little surprising.

Carpet Pythons are sluggish and placid creatures. If encountered in the wild, the safest thing to do is stand there and stare for a bit, or walk a bit closer to it and say loudly “Hey! Look! It’s a big snake! Bradley! Come check this thing out! Bring the kids.” Not a particularly threatening animal.

Carpet Pythons are usually welcome where they’re found. Except in little Pewtie’s now tweetless birdcage, of course. Despite being slow and clumsy looking they’re very effective predators of mice, rats, rabbits, and other pests. Also, sometimes pet cats.

They’re often doing dumb things like sunbathing on the road, and are routinely hit by cars. Sometimes these hits are deliberate, a lot of Aussies have the attitude “The only good snake is a dead snake”. Those people are idiots, and should be hit with sticks. If someone says that to you, find a stick immediately. It’s for the best.

These snakes are protected by law. All Australian reptiles are, from the smallest turtles to the most deadly Taipan, and killing them is thoroughly illegal. Recreational pet licenses are easy to get and these are not an uncommon Australian pet, though most recreational reptile owners prefer calmer, smaller snakes such as the Children’s Python. A snake that was discovered by a naturalist called Children. Seriously. That sounds like a joke, but it’s not.

A full-sized, healthy Carpet Python can grow up 4m long, and weigh up to 20kg. 

Positive identification of this particular species can be determined by looking at it with your eyes. Between the markings and the big triangle head, they’re pretty distinctive. There are a couple of northern snakes such as the slightly bigger Scrub Python that look similar, but you’re still going to be in the right ballpark.

Australian Aboriginals historically were very fond of these. If encountered while walking they could be picked up and draped across the shoulders, to provide fresh meat when needed.',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'1',
					'risk'=>'2',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Common Death Adder',
					'slug'=>'death-adder',
					'aka'=>'Death Adder',
					'species'=>'Acanthophis antarcticus',
					'description'=>'There are a few animals that really just do what it says on the tin. The Death Adder adds death. Where insufficient death is present, the Death Adder is there to help out, adding that much needed death.

There’s no need to ask if this is a dangerous snake. Yes. Yes it is.

Death Adders are a very distinctive looking snake. They have a shortish, squat body. Their tail tapers off and becomes just a bit skinny, just a bit quickly. The head is triangular, and pokes out from the neck, unlike most venomous Australian snakes, which have a flat connection between their neck and body. This makes them look a lot like a viper or adder, which is where the name comes from, though they’re not in any way part of the adder family, or even closely related. They’re not an especially large snake, maxing out at around a metre.

One of the fun things about it is that it doesn’t give a crap.  There’s a theory that the name Death Adder is actually a corruption of “deaf” adder. Most snakes, even venomous ones, will avoid people by slithering off before you even know they’re there. This stops us stepping on them. Not the Death Adder, though. If a person comes blundering through the Death Adder’s peaceful slumber he has an alternative option: just add some death.

The reason for the Death Adder’s complete disinterest in not killing you is that they’re an ambush predator. They have a weird knobbly tail that looks a bit like a rattlesnake’s tail. The point of it isn’t to look a bit like a rattlesnake’s tail, though. That would be useless. The point is to look a LOT like a grub.

A Death Adder will bury itself in leaves and debris, with just that tail hanging out and twitching. When an inquisitive and hungry bird or small mammal comes over and has a go, the Death Adder strikes.

And holy hell does it strike. The Death Adder has the ability to go from a strike position, add some death and let go, and then get back ready to strike again within 0.15 seconds. This is some impressive death adding. With human reflexes maxing out at about 0.5 seconds that means a committed Death Adder could strike you three times in the time it takes you to think “hey…”. While the snake is not actually that big, it manages to have some of the longest fangs of any Australian snake. They help with the adding death.

The venom is extremely potent. It’s not an Ouch Adder. Most snakes have a mix of three different components. A neurotoxin which jacks up with the nervous system, a hemotoxin which makes the blood a useless sludge, and a myotoxin, which turns the muscle tissue into soup. Death Adders have changed a little. They’ve skipped all but the neurotoxin.

The potent neurotoxin can start seriously messing with the victim within 15 minutes of a bite. Like many of Australia’s neurotoxic inhabitants, the cause of death (assuming it got that far) would be the paralysis of the muscles required for breathing. This effect will happen in around about six hours.

Death Adders don’t kill many people in Australia, thanks to antivenoms, medical care, and access to rapid transportation. Their general remoteness means they tend not to bite many either. In New Guinea, however, they still account for a significant number of deaths.',
					'short_description'=>'',
					'appearance'=>'8',
					'danger'=>'8',
					'risk'=>'6',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Tiger Snake',
					'slug'=>'tiger-snake',
					'aka'=>'Common Tiger Snake',
					'species'=>'Notechis scutatus',
					'description'=>'This snake rounds out the top three. The Tiger Snake, the [Eastern Brown Snake](/Animals/snakes/eastern-brown-snake), and the [Taipan](/Animals/snakes/coastal-taipan) account for almost all snake bite fatalities in Australia. Tiger Snakes are called that because they’re striped. Like tigers. Often their stripes are black or very dark brown alternating with lighter brown. They’re not always particularly well striped though. Sometimes there’s little contrast between the colours. One subspecies is black with black stripes. Apparently that’s really a thing.

A Tiger Snake can be identified partially from location. They tend to be found further south than most Australian snakes, which like the tropical north. Obviously the tigerness is a giveaway, but the body shape is also distinctive, being broad and slightly flattened, their body quite a bit wider than their head.

Tiger Snakes follow the basic rule that if it’s brown it’s potentially deadly. Black is also not good. It’s probably for the best to not to mess with any snakes, but if it’s brown or black give it a wide berth.

These snakes are very aggressive, and will often bite repeatedly. Their venom is in the top five most potent land-snake venoms in the world, drop for drop beating more well known snakes such as the Cobra, Black Mamba or any rattlesnakes. The presence of an antivenom keeps fatalities to a minimum. Before the antivenom, fully half the people bitten died from the bite.

The venom is highly paralytic. The first thing to go is the eyelids, weirdly enough. That’s the first sign medics look out for. Once the eyelids start to go droopy it’s all downhill from there. The facial muscles go next, followed by the throat muscles, and then you’re up crap creek because the breathing muscles are next. Antivenom will stop the paralysis from getting to its next stage, but the damage at that point is already done. If breathing has been impared medical personel will have to assist with breathing until the body has remembered that it’s supposed to be doing that. 

Tiger snakes like living in damp areas like swamps and riverbanks.',
					'short_description'=>'',
					'appearance'=>'8',
					'danger'=>'9',
					'risk'=>'9',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Giant Water Bug',
					'slug'=>'giant-water-bug',
					'aka'=>'Toe Biters, Toe Nippers, Electric-light Bugs, Alligator Ticks',
					'species'=>'Lethocerus insulanus',
					'description'=>'The term “bug” is often misapplied to all insects. In fact true bugs are a specific branch characterised by mouth parts dedicated to to sucking. This group includes leaf hoppers, bedbugs, cicadas, pond skaters, aphids, and your mum.

The largest of these, apart from the obvious, is the Giant Water Bug. It’s called that because it’s a bug that lives in water and is really huge. They have other names that say more about them. In order of accuracy. Alligator Ticks is a term used in Florida. They’re not ticks and have no connection to Alligators. It’s a dumb name, and we will give it no further time. Water Scorpion is misleading because there’s another animal called that and it’s not a scorpion either. Giant Water Bug is accurate if bland. Probably the most accurate name is Toe-biters. They get that name from biting toes. Giant Water Bugs have a pair of huge pincers at the front that they use to grab prey, ranging from frogs and small fish right up to snakes and turtles. Very small ones. But they’re not above using those pincers on anything that comes into their waters, including the soft flesh of an intruding human. It’s hard to tell whether they’re attacking a threat or just think the toe is some sort of worm.

These bugs are the largest of their family, and some species get up to 15cm long. They run close to the biggest insects in the world. Australian species usually are more like 6 to 10 cm long.

Naturally, they’re venomous. What they’re injecting is not a neurotoxin or anything, it’s just intended to dissolve their victim’s flesh so they can eat it. Which doesn’t feel as good as it might sound. Bites cause an agonisingly painful throbbing, occasionally also a “pins and needles” feeling, that lasts for several hours. Just as naturally, they can also fly, and fly very well. People often find them on roads, or on grass far from any water. They do this so that if one pool dries up they can go to another one, or to find a mate. There are few things less appealing to come flying at you than the razor sharp pincers of a giant aquatic pain-bringer.

These creatures also don’t make any clear distinction between the natural watercourse they need to survive and… say… your swimming pool. They’re a common visitor to backyard pools, where they often bite people who try to get them out. 

Giant Water Bugs are a common food in Thailand, where they’re sold deep fried from small carts on many streets. Locals report they taste not unlike spicy shrimp or prawns. Locals are lying. They taste like someone took a dump in your mouth, only crunchy. They’re also used powdered as a spice, apparently tasting like coriander (better known as cilantro in the US). 

Giant Water Bugs are easy to confuse with the unrelated Water Scorpion. They look very similar, except for the long spike coming from the rear of the water scorpion.',
					'short_description'=>'',
					'appearance'=>'10',
					'danger'=>'2',
					'risk'=>'3',
					'category_id'=>'7',
					'environment_id'=>'5'
					],
					['name'=>'Amblypygi',
					'slug'=>'amblypygi',
					'aka'=>'Tailless Whip Scorpion',
					'species'=>'Order Amblypygi',
					'description'=>'The terrifying creature at the right is an Amblypygi. That’s even a creepy looking word. It’s all spikey and angular. This creature is also known as the Tailless Whip Scorpion, not a particularly better name, because whips are nasty and scorpions are nasty, though I suppose being tailless is an improvement.

This is a horror. A creature of nightmare and darkness. Those long, terrifying antennae things. The absurd number of spikes on it, the pincers that don’t look right. It looks like a half praying mantis, half spider, half terrifying vision of chaos and destruction.

This looks like Satan’s public lice, a creature at home scuttling up and down his obsidian shaft. It’s one of the few things I’ve seen that looks inherently scary, far more than a spider. It’s like someone wanted to take the basic idea of a spider and science fiction it into a monster.

It’s an arachnid, which makes it related to scorpions and spiders. Which is pretty obvious from having way too many legs and nasty pincer things. It’s almost hard to believe it’s a real animal.

The Amblypygi is of course a predator. Those aren’t the spiked claws and tearing mouthparts of a creature that eats moss and berries. They’re a fast, agile, and highly aggressive hunter, quick enough to even catch moths in flight. Some of them even fish for small shrimp. The large African species such as the Tanzanian Giant Tailless Whipscorpion can get up to 20cm (8 inches) across, including their long legs. Australian species thankfully aren’t that big.

They like it damp, dying easily in dry environments, so they tend to live in the tropical north. Along with almost every other bit of nightmare fuel in Australia.

There’s some good news, though. The Amblypygi cannot fly. That’s something. Not that any other arachnid can, but it’s still good to know. Another plus is that they have no venom. That’s right, not venomous. 

Actually… I’m going to be honest, it’s hard to say much more about these things other than holy crap they look scary. But at some point it has to be admitted. These are utterly harmless in every way possible. They actually make good pets, and are a growing trade in the US along with related Vinigaroons. They have strong family bonds. A mother will raise her babies, carrying them with her until they molt for a second time. If they are distressed, the mother will stroke them to calm them. Siblings that are separated will cuddle close when they are put back together.

If you didn’t know I was talking about a terrifying predatory arachnid right now, I could be describing kittens. These are kittens. If there was any justice you’d see them on really crappy Valentines Day cards, with bows on them, or in a little basket. Actually, considering a kitten will happily bite and scratch like a demon, and an Amblypygi almost never will, a kitten is actually significantly more dangerous.

As a random point, the “spider” used as a demo for curses in the Harry Potter and the Goblet of Fire movie was actually an Amblypygi, probably because they look so damn nightmarish and are unfamiliar to most people.

Spikey. Terrifying. Less dangerous than a kitten.',
					'short_description'=>'',
					'appearance'=>'10',
					'danger'=>'1',
					'risk'=>'1',
					'category_id'=>'6',
					'environment_id'=>'1'
					],
					['name'=>'Red-bellied Black Snake',
					'slug'=>'red-bellied-black',
					'aka'=>'Redbelly Black',
					'species'=>'Pseudechis porphyriacus',
					'description'=>'The Red-bellied Black Snake is another snake named by a creative and talented person. They are a black snake. Their belly is red. That’s the end of the story. They’re also quite a large snake. Up to 2m long is typical, but they’ve been measured at 2.5m. That’s more than eight feet long if you’re more comfortable with archaic units.

The Red Bellied Black snake is one of Australia’s worst venomous snakes. I don’t mean they’re the most dangerous. I mean the opposite. They are completely rubbish at being venomous.Australians usually think these are dangerous snakes. They are not.

If a Red-bellied Black is approached by a person, the first thing they’ll do is run away. Technically, they’re running for whatever is the closest pre-arranged safe spot. Which could be near the person, so it may look like they’re attacking, but they’re not.

At this point, the Red-bellied Black is so unaggressive that it will rarely bite, even if picked up or if stepped on. If they do by some miracle get up enough savage serpentine fury to actually bite, they’re so unaggressive that they often bite **with their mouth closed**. This is the most rubbish strike any snake can possibly make. That’s not even trying. It’s almost insulting. That’s not a bite, it’s like a nudge, or a poke. You can’t just *boop* people. Jesus Christ, snake, this is embarrassing.

If the snake does bite (and actually gets its mouth open successfully) it will often do such a half-assed job of it that it’s pretty clear the snake just has no freaking idea what it’s doing and saw this on TV once. There’s a good chance that once it’s done, it will apologise profusely and offer to call someone for you. 

It may be a bad example of a venomous snake, but it’s still venomous, and any snake bite should be taken seriously. There are records of death from bites by these guys. They’re old and unconfirmed reports, and it’s possible the snake was misidentified. But there IS the possibility. This is especially the case for a child, or also a pet.

Symptoms of the venom include nausea, vomiting, headaches, or even collapse. Entertainingly, it will make your pee a rusty brown colour. It may be worth seeking out a bite just for that. Unfortunately that effect is caused by the systemic breakdown of your muscle tissue, but still, fun!

Antivenom is not generally used for these snake bites, because.. well, they’re just not that bad. If antivenom is warranted, [Tiger Snake](/Animals/snakes/tiger-snake) antivenom is used because the potency of that antivenom means only a small amount is needed. 

All of Australia’s snakes should be left the hell alone. For a deadly serpent these are close to harmless. Leave them alone and they’ll leave you alone. And certainly, of all things, please don’t kill them. It’s not just illegal to harm them, it’s an absolute dick move.',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'7',
					'risk'=>'5',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Red Kangaroo',
					'slug'=>'red-kangaroo',
					'aka'=>'',
					'species'=>'Macropus rufus',
					'description'=>'The kangaroo is undoubtedly Australia’s best known animal. There’s a good reason for this, it’s a creature unlike any found anywhere else in the world. It is large, unique, and fascinating.

At full size, a kangaroo is also unthinkably large. Adult males have been confirmed and recorded standing at 2m tall (6” 9’) and weighing close to 100kg, or 200lb. There are unconfirmed but entirely likely sightings of individuals up to 150kg (330lb). An adult male kangaroo is called a buck, or a boomer. Females are mostly called jills, but doe is also used.

A large boomer is not just tall, but… there’s no better way to say it… they’re freaking ripped. The chest muscles on a red kangaroo would impress any body builder. Their front paws are hardly vestigial like people seem to think. They’re powerful limbs equipped with sharp claws. Kangaroos are actually unexpectedly strong swimmers, and if chased will run into the water, then turn and deliberately drown their attacker, holding them under with those strong arms. They also use them to fight, pushing and poking each other in a manner known as “boxing”.

But if their arms are strong… A large red kangaroo weighs over 100 kilograms, and their legs can launch them nearly 10m in a single jump. Those legs are intended to cover the huge distances that occur in central Australia, a place where some individual farms are measured in millions of acres. To give an American perspective, one farm is about the size of Vermont. Slightly larger than Israel.

A kangaroo can happily lope along at a speed of 20km/h, but reach speeds of 56km/h if they need to. (That’s 12mph and 35mph.) The secret to this bounding is not just the sheer power in their legs. The hamstring equivalent of a kangaroo is basically a bungie cord. Rather just holding the impact it stretches, and then snaps back, releasing most of the energy back into their leap, like a pogo stick. By moving constantly forward relying on this spring and minimal energy input the red kangaroo can travel the outback impressively efficiently.

This brings us to the question of whether they’re dangerous. The answer is a hard one. They certainly can be. When threatened (or just being a dick) the Red Kangaroo can rear back on its incredibly tough tail, and launch its legs forward in a devastating kick. Bearing in mind this is a kick with the power to launch 100kg over 10m and it’s easy to see that this could do damage. There was a death recorded in 1936 where a man’s dogs were attacking a kangaroo and he went to pull them off, only to be killed by the roo. That’s the only confirmed death, but people being kicked and injured is common. You can find plenty of video on Youtube, and it’s not hard to see why serious injury could occur.

The most dangerous thing about kangaroos is not their kick, however. It’s their jumping. Kangaroos move around the most at dusk and dawn. This is a poor vision time for drivers on Australia’s very long and rarely fenced-off roads. Because of their huge leaps, they have the ability to almost appear directly on the road, and roo-caused accidents and fatalities are not a rarity. This can happen either through direct impact with a 100kg animal, or more likely swerving to avoid one. 

The Red Kangaroo isn’t the only kind of Kangaroo. The smaller Eastern Grey has a larger population and is more likely to be seen in inhabited areas. Even smaller species are known as Wallabies, and are adorable, with softer features that look a bitlike a possum.

Smaller kangaroo species can still kick powerfully, but their impact and danger diminishes with their size.

It’s got to be brought up. Kangaroos also have weird junk. The males of smaller species (not the Eastern Gray or Red Kangaroos) have a forked penis, which works out great because the female has three vaginas. There’s a common doorway, but then three paths. This setup, along with the two uteri, make the jill an impressive baby-making machine. She can have one joey in her pouch, a foetus on the boil and an egg ready and waiting for a strapping boomer to hop on by. Impressively, she can even hit pause on the feotus like a Netflix binge, and stop its development until food is more available or she just feels like it.',
					'short_description'=>'',
					'appearance'=>'2',
					'danger'=>'2',
					'risk'=>'3',
					'category_id'=>'10',
					'environment_id'=>'1'
					],
					['name'=>'European Honeybee',
					'slug'=>'honey-bee',
					'aka'=>'Bee, Honey Bee',
					'species'=>'Apis mellifera',
					'description'=>'The humble European Honeybee. We introduced these guys because we like their tasty honey. We farm them and they’re awesome. Honey is an incredible product. Bees make it so that they can eat it as a concentrated sugar food when they need it, and it’s remarkably long lasting and useful so we steal it. In fact, it’s so well preserved that sealed honey jars from thousands of years ago containing perfectly edible honey were apparently found in the great Pyramids. Part of the reason for this preservation is that for all its sugary goodness, honey contains almost no water whatsoever, making it hard for bacteria to grow.

Honey can also be used as an effective natural remedy for some skin infections. Because of its “smothering” nature and anti-bacterial properties it is an excellent cover for skin lesions such as bedsores and skin ulcers.

Some people are scared of bees, but with little reason. They rarely sting. When a bee stings, their barbed stinger will hook into the skin, and as the bee pulls clear it leaves behind its venom gland. This process also tears out a whole bunch of muscle, nerves, and digestive tract from the bee, which will now die. So it’s not like they do it for fun. Bees are non-aggressive and will not seek to sting people, they’re just looking for flowers.

With all that said… They’re lethal.

Honeybees kill more people in Australia than any other animal. In fact, honeybees kill more people in Australia than [snakes](/Animals/snakes), [spiders](/Animals/spiders), centipedes, and [scorpions](/Animals/arachnids/scorpion) combined. (Admittedly those last three don’t kill anyone at all, so I’m cheating a bit, I could add bunyips and elephants and have the same number.)

When a bee stings a person it will die. But it will also release a pheromone that marks the victim as a threat, and triggers other bees to sting. This is not good. The pheromone doesn’t wash off for a long time, so running away is about the only option.

About 3% of people have immune systems that experience bee venom for the first time and then make some poor decisions. The immune system decides that if this terrible stuff is encountered again, it’s going to go ape shit, swell up the throat and suffocate or drop the blood pressure so low the body into cardiac arrest. As both breathing and heart function are considered more of a need than a want, this is an extremely serious condition, known as anaphylaxis. Anaphylaxis can be fatal, and allergy to bees, as well as other insect bites or stings is a serious problem. Anaphylactic reactions to peanuts, tree nuts, seafood and other foods are relatively common causes of death.',
					'short_description'=>'',
					'appearance'=>'1',
					'danger'=>'2',
					'risk'=>'7',
					'category_id'=>'7',
					'environment_id'=>'1'
					],
					['name'=>'Scorpion',
					'slug'=>'scorpion',
					'aka'=>'',
					'species'=>'Order Scorpiones',
					'description'=>'Scorpions are the second most deadly group of animals in the world, accounting for about 7,000 deaths a year. Though that’s well down on the roughly 20,000 a year from snake bite, it’s still a lot.

There are about 40 different species of scorpion in Australia, and they range in size from very small, just a few cm long, to the 12cm long Forest Scorpions in Northern Australia. They’re found in all climates, hiding under bark in forests, under rocks, or in desert sands. They’re also found in every Australian state.

Not one death has ever been reported from an Australian species of Scorpion. They are just not that dangerous. Painful, but not dangerous. Stings should be be checked by a doctor, just to be sure. But while an Australian scorpion is a guaranteed poor choice for the prize in a Christmas cracker, it’s hardly the stealthy death dealer people seem to think it is.

A fun fact about scorpions is that they look like a glowstick under UV light. No one knows why, but scorpions have shells that flouresce in UV, making it actually easier to find them in the dark with a blacklight than in the daylight. Some scientists have suggested that they like raves, or possibly someone jizzed on them. Better scientists believe the glow is caused by sugars and waxes in the coat that waterproof the scorpion. 

There is a choice Scorpions make, evolutionarily speaking. Am I going to be strong, with powerful tearing claws, or am I going to be small and uninspiring, but deadly? The bigger, heavier scorpions look scarier. But it’s actually the little ones you have to watch out for. All the genuinely deadly ones are reasonably small, and lack the massive hulking claws many associate with death scorpions.',
					'short_description'=>'',
					'appearance'=>'8',
					'danger'=>'3',
					'risk'=>'2',
					'category_id'=>'6',
					'environment_id'=>'1'
					],
					['name'=>'Giant Centipede',
					'slug'=>'giant-centipede',
					'aka'=>'',
					'species'=>'Ethmostigmus rubripes',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'10',
					'danger'=>'5',
					'risk'=>'2',
					'category_id'=>'8',
					'environment_id'=>'1'
					],
					['name'=>'Emu',
					'slug'=>'emu',
					'aka'=>'',
					'species'=>'Dromaius novaehollandiae',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'2',
					'danger'=>'3',
					'risk'=>'2',
					'category_id'=>'9',
					'environment_id'=>'1'
					],
					['name'=>'Native Bee',
					'slug'=>'native-bee',
					'aka'=>'',
					'species'=>'Trigona carbonaria',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'2',
					'danger'=>'1',
					'risk'=>'1',
					'category_id'=>'7',
					'environment_id'=>'1'
					],
					['name'=>'King Brown',
					'slug'=>'king-brown',
					'aka'=>'Mulga Snake',
					'species'=>'Pseudechis australis',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'7',
					'danger'=>'8',
					'risk'=>'7',
					'category_id'=>'2',
					'environment_id'=>'1'
					],
					['name'=>'Centipede',
					'slug'=>'centipede',
					'aka'=>'',
					'species'=>'Cormocephalus spp',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'10',
					'danger'=>'7',
					'risk'=>'6',
					'category_id'=>'8',
					'environment_id'=>'1'
					],
					['name'=>'House Centipede',
					'slug'=>'house-centipede',
					'aka'=>'',
					'species'=>'Allothereua maculata',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'8',
					'danger'=>'2',
					'risk'=>'1',
					'category_id'=>'8',
					'environment_id'=>'1'
					],
					['name'=>'Tasmanian Devil',
					'slug'=>'tasmanian-devil',
					'aka'=>'Tassie Devil',
					'species'=>'Sarcophilus harrisii',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'3',
					'danger'=>'1',
					'risk'=>'2',
					'category_id'=>'10',
					'environment_id'=>'1'
					],
					['name'=>'Jack Jumper Ant',
					'slug'=>'jack-jumper-ant',
					'aka'=>'',
					'species'=>'Myrmecia pilosula',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'',
					'danger'=>'',
					'risk'=>'',
					'category_id'=>'7',
					'environment_id'=>'1'
					],
					['name'=>'Bull Ant',
					'slug'=>'bull-ant',
					'aka'=>'',
					'species'=>'Myrmecia spp',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'',
					'danger'=>'',
					'risk'=>'',
					'category_id'=>'7',
					'environment_id'=>'1'
					],
					['name'=>'Fire Ant',
					'slug'=>'fire-ant',
					'aka'=>'',
					'species'=>'Solenopsis spp',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'',
					'danger'=>'',
					'risk'=>'',
					'category_id'=>'7',
					'environment_id'=>'1'
					],
					['name'=>'Bird Eating Spider',
					'slug'=>'bird-eating-spider',
					'aka'=>'Barking spider, Whistling Spider',
					'species'=>'Selenocosmia crassipes',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'',
					'danger'=>'',
					'risk'=>'',
					'category_id'=>'1',
					'environment_id'=>'1'
					],
					['name'=>'Cane Toad',
					'slug'=>'cane-toad',
					'aka'=>'',
					'species'=>'Rhinella marinus',
					'description'=>'',
					'short_description'=>'',
					'appearance'=>'',
					'danger'=>'',
					'risk'=>'',
					'category_id'=>'8',
					'environment_id'=>'1'
					],


		);

		// Uncomment the below to run the seeder
		DB::table('animals')->insert($animals);
	}

}
