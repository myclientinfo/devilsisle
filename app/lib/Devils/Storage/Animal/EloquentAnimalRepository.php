<?php namespace Devils\Storage\Animal;

use Animal;

class EloquentAnimalRepository implements AnimalRepository {

    public function all($slug)
    {
        //return Category::where('slug', '=', $slug)->get();
    }

    public function find($id)
    {
        return Animal::find($id);
    }

    public function getSlug($slug)
    {
        return Animal::where('slug','=', $slug)->first();
    }

    public function create($input)
    {
        return Animal::create($input);
    }

    public function getSpecified($field, $value, $comparison = '>')
    {
        return Animal::where($field, $comparison, $value)->take(10)->orderBy($field, 'DESC')->get();
    }

}