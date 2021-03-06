<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnimalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('animals', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('species');
			$table->text('short_description');
			$table->text('description');
			$table->integer('appearance');
			$table->integer('danger');
			$table->integer('risk');
			$table->integer('category_id');
			$table->string('slug');
			$table->integer('environment_id');
			$table->string('aka');
			$table->nullableTimestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('animals');
	}

}
