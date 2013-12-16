<?php namespace Devils\Storage\Animal;

interface AnimalRepository {

    public function all($slug);

    public function find($id);

    public function getSlug($slug);

    public function create($input);

    public function getSpecified($field, $value, $comparison);
}