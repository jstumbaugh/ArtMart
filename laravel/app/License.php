<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'licenses';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['acro', 'name', 'url'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [''];
	
	/**
	 * Artwork accessor function. Allows access to all
	 * artwork that's under a particular license.
	 * 
	 * @return Artwork model array
	 */
	public function artworks()
	{
		return $this->hasMany('\App\Artwork');
	}
}