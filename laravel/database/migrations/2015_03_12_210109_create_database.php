<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration {

	/**
	 * Basic database creation migration.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('firstname');
			$table->string('lastname');
			$table->string('biography');
			$table->string('homepage');
			$table->rememberToken();
			$table->timestamps();
		});
		
		Schema::create('artworks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('title');
			$table->string('description');
			$table->decimal('price', 10, 2);
		});
	}

	/**
	 * Destroy everything! Gads!
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artworks');
		Schema::drop('users');
	}

}
