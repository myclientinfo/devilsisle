<?php

class Category extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function animals()
	{
		return $this->hasMany('Animal');
	}

}
