@extends('layouts.scaffold')

@section('main')

<div class="container"> 
    <!--============================== slider =================================-->
    <div class="slider">
          <div class="container">
        <div class="flexslider clearfix">
              <ul class="slides">
            
            <li>
                  <div class="flex-caption"> AUSTRALIA: DEATH AT EVERY TURN?</div>
                </li>
            
            
          </ul>
            </div>
      </div>
        </div>
    <!--==============================end slider =================================--> 
  </div>
      <div class="block-main row-service">
    <div class="container">
          <div class="row">
        <article class="span3">
              <div>
            <section class="maxheight">
                  <h4>SNAKES</h4>
                  <p>8 of the 10 most deadly snakes in the world are in Australia, and several are very common. Take a look at some deadly and some very much not.</p>
                </section>
            <a href="/Animals/snakes" class="link">read more</a> </div>
            </article>
        <article class="span3">
              <div>
            <section class="maxheight">
                  <h4>SPIDERS</h4>
                  <p>Very few spiders in the world are deadly, but several species in Australia have significant numbers of deaths.</p>
                </section>
            <a href="/Animals/spiders" class="link">read more</a> </div>
            </article>
        <article class="span3">
              <div>
            <section class="maxheight">
                  <h4>JELLYFISH</h4>
                  <p>The single most deadly jellyfish, the Box Jellyfish is a regular feature of Northern Australian seas. Take a look at this and some of its friends.</p>
                </section>
            <a href="/Animals/jellyfish" class="link">read more</a> </div>
            </article>
        <article class="span3">
              <div>
            <section class="maxheight">
                  <h4>WEIRD SHIT</h4>
                  <p>Some of Australia's nastiest villains include a tiny octopus, a marine snail and even a venomous shrimp. </p>
                </section>
            <a href="/Animals/other" class="link">read more</a> </div>
            </article>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="extra-content">
    <div class="block-main">
          <div class="container">
        <div class="row">
              <article class="span3">
            <h3>All Animal Groups</h3>
            <ul class="list">
            @foreach($categories as $category)
                  <li><a href="/Animals/{{$category->slug}}"><?php echo $category->name?></a></li>
              @endforeach                  
                </ul>
          </article>
              <article class="span6">
              <div class="clearfix pad-top">



              <h2>good news and bad news</h2>

              <p style="font-size: 16px; line-height: 150%">Non-Australians often have an impression of Australia as a land filled with terrifying nightmares made real - snakes, spiders, scorpions and centipedes, venom and poison and teeth and claws.</p>

              <p style="font-size: 16px; line-height: 150%">The fact is, Australia has very few deaths from any of the above. No one has died from a spider bite since 1981 when Funnel Web Spider anti-venom was developed. There are no scorpions that are dangerous. Centipedes are much the same.</p>

              <p style="font-size: 16px; line-height: 150%">Then there's the other important fact: of the people bitten, stung, scratched or kicked by Australia's wildlife, the vast majority were trying to catch something, or kill something. Most being about three quarters. No specific statistics are available on how many were immediately preceeded with "Mate, hold me beer!" but it would be a safe bet to think more than a few.</p>

              <p style="font-size: 16px; line-height: 150%">Australia has a lot of nasty looking animals, especially in the spiders, that are actually completely harmless. Most particularly, the gigantic but otherwise harmless <a href="/Animals/spiders/golden-orb-weaver">Golden Orb Weaver</a> and <a href="/Animals/spiders/huntsman-spider">Huntsman</a> spiders. That said, the animals to the right? They will straight up kill you.</p>


                </div>
          </article>
              <article class="span3">
            <h3 class="color2">THE WORST:</h3>
            <ul class="list-vegetables">
            @foreach($danger as $animal)
                  <li>
                <div><a href="/Animals/{{$animal->category->slug}}/{{$animal->slug}}"><img src="images/{{$animal->slug}}/{{$animal->slug}}.jpg " alt="" class="span3 animal-vegetable {{$animal->slug}}"></a></div>
              </li>
              @endforeach
                </ul>
           
          </article>
            </div>
      </div>
        </div>
  </div>



</div>

@stop
