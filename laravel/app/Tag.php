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
	public function artwork()
	{
		return $this->belongsTo('\App\Artwork'); #->orderBy('num_purchases', 'desc')->orderBy('num_views', 'desc')->orderBy('created_at', 'desc');
	}

	public function scopeTagSearch($query, $queryString)
	{
		$percent = "%";
		$aggQuery = $percent.$queryString.$percent;
		return $query->where('name', 'like', $aggQuery);
	}
}