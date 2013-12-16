@extends('layouts.scaffold')

@section('main')

<h1>Create Animal</h1>

{{ Form::open(array('route' => 'animals.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('species', 'Species:') }}
            {{ Form::text('species') }}
        </li>

        <li>
            {{ Form::label('short-description', 'Short-description:') }}
            {{ Form::textarea('short-description') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('appearance', 'Appearance:') }}
            {{ Form::input('number', 'appearance') }}
        </li>

        <li>
            {{ Form::label('danger', 'Danger:') }}
            {{ Form::input('number', 'danger') }}
        </li>

        <li>
            {{ Form::label('risk', 'Risk:') }}
            {{ Form::input('number', 'risk') }}
        </li>

        <li>
            {{ Form::label('category_id', 'Category_id:') }}
            {{ Form::input('number', 'category_id') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


