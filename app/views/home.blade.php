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
              <article class="span6" style="opacity: 0">
            <div class="clearfix pad-top">
                  <figure class="img-indent1"><img src="img/page1-img1.jpg " alt="" /></figure>
                  <div class="title-1">Implementing 
                NEW TECHNOLOGIES 
                for agriculture 
                growth </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            <div class="row">
                  <ul class="list-2 clearfix">
                <li class="item-1 span2"> <strong>01/</strong>
                      <h4>Agricultural<br>
                    Seeds</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad. </p>
                      <a href="#" class="link1">read more</a> </li>
                <li class="item-2 span2"> <strong>02/</strong>
                      <h4>research<br>
                    &amp; development</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad. </p>
                      <a href="#" class="link1">read more</a> </li>
                <li class="item-3 span2"> <strong>03/</strong>
                      <h4>product<br>
                    safety</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad. </p>
                      <a href="#" class="link1">read more</a> </li>
              </ul>
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
