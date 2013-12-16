<?php namespace Devils\Storage\Category;

interface CategoryRepository {

    public function all();

    public function getSlug($slug);

}