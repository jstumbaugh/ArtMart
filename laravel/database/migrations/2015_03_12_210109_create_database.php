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
		
		Schema::create('wishlists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('entry');
		});
		
		Schema::create('searchhistory', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('query');
			$table->integer('numresults');
		});
		
		Schema::create('licenses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url');
		});
		
		Schema::create('artworks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('license_id')->unsigned()->default(0);
			$table->foreign('license_id')->references('id')->on('licenses');
			$table->string('title');
			$table->string('description');
			$table->decimal('price', 10, 2);
		});
		
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('artwork_id')->unsigned()->default(0);
			$table->foreign('artwork_id')->references('id')->on('artworks');
			$table->string('name');
		});
		
		Schema::create('mediatypes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
		});
		
		Schema::create('media', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('artwork_id')->unsigned()->default(0);
			$table->foreign('artwork_id')->references('id')->on('artworks');
			$table->integer('type_id')->unsigned()->default(0);
			$table->foreign('type_id')->references('id')->on('mediatypes');
			$table->string('link');
		});
		
	}

	/**
	 * Destroy everything! Gads!
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media');
		Schema::drop('mediatypes');
		Schema::drop('tags');
		Schema::drop('artworks');
		Schema::drop('licenses');
		Schema::drop('wishlists');
		Schema::drop('searchhistory');
		Schema::drop('users');
	}

}
