<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaType extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mediatypes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [''];
	
	/**
	 * Media accessor function. Allows access to all
	 * media of this particular type.
	 * 
	 * @return Media model array
	 */
	public function media()
	{
		return $this->hasMany('\App\Media');
	}
}