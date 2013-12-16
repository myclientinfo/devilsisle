<?php namespace Devils\Storage\Category;

use Category;

class EloquentCategoryRepository implements CategoryRepository {

    public function all()
    {
        return Category::orderBy('name', 'ASC')->get();
    }

    public function getSlug($slug)
    {
        return Category::where('slug','=', $slug)->first();
    }

}