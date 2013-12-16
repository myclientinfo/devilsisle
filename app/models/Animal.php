<?php

class Animal extends Eloquent {
	protected $guarded = array('id');

	public static $rules = array(
		'name' => 'required',
		'species' => 'required',
		'short-description' => 'required',
		'description' => 'required',
		'appearance' => 'required',
		'danger' => 'required',
		'risk' => 'required',
		'category_id' => 'required'
	);

	public function category()
	{
		return $this->belongsTo('Category');
	}
}
