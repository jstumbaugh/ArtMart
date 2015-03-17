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
			$table->string('firstname')->default('');
			$table->string('lastname')->default('');
			$table->string('biography')->default('');
			$table->string('homepage')->default('');
			$table->rememberToken();
			$table->timestamps();
		});
		
		Schema::create('wishlists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('entry');
			$table->timestamps();
		});
		
		Schema::create('searchhistories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('query');
			$table->integer('numresults');
			$table->timestamps();
		});
		
		Schema::create('licenses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('acro');
			$table->string('name');
			$table->string('url');
			$table->timestamps();
		});
		
		Schema::create('artworks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->default(0);
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('license_id')->unsigned()->default(0);
			$table->foreign('license_id')->references('id')->on('licenses');
			$table->string('title');
			$table->string('description')->default('');
			$table->decimal('price', 10, 2);
			$table->timestamps();
		});
		
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('artwork_id')->unsigned()->default(0);
			$table->foreign('artwork_id')->references('id')->on('artworks');
			$table->string('name');
			$table->timestamps();
		});
		
		Schema::create('mediatypes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
		
		Schema::create('media', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('artwork_id')->unsigned()->default(0);
			$table->foreign('artwork_id')->references('id')->on('artworks');
			$table->integer('type_id')->unsigned()->default(0);
			$table->foreign('type_id')->references('id')->on('mediatypes');
			$table->string('name')->default('');
			$table->integer('order')->default(0);
			$table->string('link');
			$table->string('thumb')->default('');
			$table->timestamps();
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
		Schema::drop('searchhistories');
		Schema::drop('users');
	}
}