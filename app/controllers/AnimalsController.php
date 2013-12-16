<?php

use Devils\Storage\Animal\AnimalRepository as Animal;
use Devils\Storage\Category\CategoryRepository as Category;

class AnimalsController extends BaseController {

	/**
	 * Animal Repository
	 *
	 * @var Animal
	 */
	protected $animal;
	protected $category;

	public function __construct(Animal $animal, Category $category)
	{
		$this->animal = $animal;
		$this->category = $category;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$animals = $this->animal->all();
		return View::make('animals.index', compact('category'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('animals.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Animal::$rules);

		if ($validation->passes())
		{
			$this->animal->create($input);

			return Redirect::route('animals.index');
		}

		return Redirect::route('animals.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($category, $slug)
	{
		$animal = $this->animal->getSlug($slug);

		return View::make('animals.show', array('animal'=> $animal, 'category'=>$category));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$animal = $this->animal->find($id);

		if (is_null($animal))
		{
			return Redirect::route('animals.index');
		}

		return View::make('animals.edit', compact('animal'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Animal::$rules);

		if ($validation->passes())
		{
			$animal = $this->animal->find($id);
			$animal->update($input);

			return Redirect::route('animals.show', $id);
		}

		return Redirect::route('animals.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->animal->find($id)->delete();

		return Redirect::route('animals.index');
	}

	public function home()
	{
		$data = [
			'danger' => $this->animal->getSpecified('danger','10', '=')
		];

		return View::make('home', $data);

	}

	public function base(){
		return View::make('base');
	}

}
