<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

View::share('categories', Category::remember(5)->get());

Route::get('/', 'AnimalsController@home');


Route::get('/Animals', 'AnimalsController@base');
Route::get('/Animals/{category}', 'CategoriesController@show');
Route::get('/Animals/{category}/{slug}', 'AnimalsController@show');

Route::get('/Contact', function(){
	return View::make('contact');
});

Route::get('/About', function(){
	return View::make('about');
});

Route::post('/Contact', function(){
	Mail::send('emails.contact', array('data'=>Input::all()), function($message)
	{
	    $message->to('matt@myclient.info', 'Matt Burgess')->subject('Contact!');
	});
	return View::make('contact-confirm');
});