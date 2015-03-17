<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tags';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['artwork_id', 'name'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [''];
	
	/**
	 * Artwork accessor function. Allows access to all
	 * artwork using this particular tag.
	 * 
	 * @return Artwork model array
	 */
	public function artworks()
	{
		return $this->hasMany('\App\Artwork');
	}
}