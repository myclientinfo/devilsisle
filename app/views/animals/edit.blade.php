@extends('layouts.scaffold')

@section('main')

<h1>Edit Animal</h1>
{{ Form::model($animal, array('method' => 'PATCH', 'route' => array('animals.update', $animal->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('animals.show', 'Cancel', $animal->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
