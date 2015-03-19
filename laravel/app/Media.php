<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'media';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['artwork_id', 'type_id', 'link'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [''];
	
	/**
	 * Artwork accessor function. Allows access to
	 * the artwork this media belongs to.
	 * 
	 * @return Artwork model
	 */
	public function artwork()
	{
		return $this->belongsTo('\App\Artwork');
	}
	
	/**
	 * Media Type accessor function. Allows access to
	 * the media's type.
	 * 
	 * @return MediaType model
	 */
	public function mediatype()
	{
		return $this->belongsTo('\App\MediaType');
	}
}