<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'artworks';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'license_id', 'title', 'description', 'price'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [''];
	
	/**
	 * User accessor function. Allows access to
	 * the user that's posted this artwork.
	 * 
	 * @return User model
	 */
	public function user()
	{
		return $this->belongsTo('\App\User');
	}
	
	/**
	 * License accessor function. Allows access to
	 * the license the artwork was posted under.
	 * 
	 * @return License model
	 */
	public function license()
	{
		return $this->belongsTo('\App\License');
	}
	
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
		return $this->hasMany('\App\Media');
	}
}