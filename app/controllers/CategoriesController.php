<?php

use Devils\Storage\Category\CategoryRepository as Category;

class CategoriesController extends BaseController {

	/**
	 * Category Repository
	 *
	 * @var Category
	 */
	protected $category;

	public function __construct(Category $category)
	{
		$this->category = $category;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$category = $this->category->getSlug($slug);
		$categories = $this->category->all();
		return View::make('categories.show', array('category'=>$category, 'categories'=>$categories));
	}

	

}
