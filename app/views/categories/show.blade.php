@extends('layouts.scaffold')

@section('main')


<div id="content">

	<div class="block-main">

		<div class="container"> 

			<div class="row">

				<div class="span8">
				
				<ul class="breadcrumb">
                  <li><a href="/Animals/">All Animals</a> <span class="divider">/</span></li>
                  <li class="active">{{{ $category->name }}}</li>
                </ul>

					<h3>{{$category->name}}</h3>

					<p>
						{{ Markdown::render($category->description) }}
					</p>

				

				<div class="row">

					<ul class="list-products clearfix">
					@foreach ($category->animals as $animal)
						<?php if(!$animal->description) continue; ?>
					    <li class="span3">
					    	<figure>
					    	<a href="/Animals/{{{$animal->category->slug}}}/{{{ $animal->slug }}}" class="image-link">
								<img src="/images/{{{ $animal->slug }}}/{{{ $animal->slug }}}.jpg" class="image-link-image" />
					    	</a>
					    	</figure>
					    	<div class="txt-1">
						    	<a href="/Animals/{{{$animal->category->slug}}}/{{{ $animal->slug }}}">
						    		{{{ $animal->name }}}
						    	</a>
					    	</div>
					    </li>
					@endforeach
					</ul>

				</div>

				</div>


				<div class="span4">
					
					<h3 class="color2">Other Animals</h3>

					<ul class="list">
					@foreach($categories as $category)
			            <li><a href="/Animals/{{$category->slug}}">{{$category->name}}</a></li>
			        @endforeach
		           </ul>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
