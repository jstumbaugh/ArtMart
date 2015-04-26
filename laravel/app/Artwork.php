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
		return $this->hasMany('\App\Media')->orderBy('order', 'asc');
	}
	
	/**
	 * "Newest" scope. Returns latest art by post date.
	 * 
	 * @return Hottest query
	 */
	public function scopeNewest($query)
	{
		return $query->orderBy('created_at', 'desc');
	}
	
	/**
	 * "Hottest" scope. Returns "top" art by looking at
	 * number of views/purchase in addition to date.
	 * 
	 * @return Hottest query
	 */
	public function scopeHottest($query)
	{
		return $query->orderBy('num_purchases', 'desc')->orderBy('num_views', 'desc')->orderBy('created_at', 'desc');
	}

	/**
	 *	Initial Search function
	 *	@return Search query
	*/
	public function scopeSearch($query, $queryString)
	{ 
		//var_dump($queryString);
		$percent = "%";
		$aggQuery = $percent.$queryString.$percent;
		var_dump($aggQuery);
		$query->where('title', 'like', $aggQuery);
	}
}