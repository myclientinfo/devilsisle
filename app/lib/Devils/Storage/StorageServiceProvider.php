<?php namespace Devils\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'Devils\Storage\Animal\AnimalRepository',
            'Devils\Storage\Animal\EloquentAnimalRepository'
        );

        $this->app->bind(
            'Devils\Storage\Category\CategoryRepository',
            'Devils\Storage\Category\EloquentCategoryRepository'
        );
    }

}