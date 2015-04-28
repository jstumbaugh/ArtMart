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
	
	/**
	 * Formatted & Encoded Link URL.
	 * 
	 * @return URL link
	 */
	public function url_link()
	{
		$link = $this->link;
		if(starts_with($link, 'http'))
			return $link;
		else
			return route('index', array()) . '/uploads/'. rawurlencode($link);
	}
	
	/**
	 * Formatted & Encoded Thumb URL.
	 * 
	 * @return URL thumb
	 */
	public function url_thumb()
	{
		$thumb = $this->thumb;
		if(starts_with($thumb, 'http'))
			return $thumb;
		else
			return route('index', array()) . '/uploads/'. rawurlencode($thumb);
	}
	
	/**
	 * Formatted & Unencoded Link URL.
	 * 
	 * @return URL link
	 */
	public function raw_link()
	{
		$link = $this->link;
		if(starts_with($link, 'http'))
			return $link;
		else
			return route('index', array()) . '/uploads/'. $link;
	}
	
	
	/**
	 * Formatted & Unencoded Thumb URL.
	 * 
	 * @return URL thumb
	 */
	public function raw_thumb()
	{
		$thumb = $this->thumb;
		if(starts_with($thumb, 'http'))
			return $thumb;
		else
			return route('index', array()) . '/uploads/'. $thumb;
	}
}