<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'artworks';
	
	/**
	 * Tag accessor function. Allows access to all
	 * tags this artwork has.
	 * 
	 * @return Tag model array
	 */
	public function tags()
	{
		return $this->hasMany('\App\Tag');
	}
	
	/**
	 * Media accessor function. Allows access to all
	 * media that's a part of this artwork.
	 * 
	 * @return Media model array
	 */
	public function media()
	{
		return $this->hasMany('\App\Media')->orderBy('order', 'asc');
	}
	
	public function search($query)
	{
		return $query->where('title', 'like', '%' + $query + '%');
	}
}