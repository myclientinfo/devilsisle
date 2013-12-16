@extends('layouts.scaffold')

@section('main')


<div id="content">

	<div class="block-main">

		<div class="container"> 

			<div class="row">

				<div class="span12">
					
					<h3>All Listed Animals</h3>

					@foreach($categories as $category)
					<h4><a href="/Animals/{{$category->slug}}">{{$category->name}}</a></h4>
						<ul>
						@foreach($category->animals as $animal)
						<li><a href="/Animals/{{$category->slug}}/{{$animal->slug}}">{{$animal->name}}</a></li>
						@endforeach
						</ul>
					@endforeach

				</div>
			</div>

		</div>

	</div>

</div>

@stop
