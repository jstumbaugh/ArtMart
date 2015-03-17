<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'searchhistories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'query', 'numresults'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [''];
	
	/**
	 * User accessor function. Allows access to
	 * the user this search history record belongs to.
	 * 
	 * @return User model
	 */
	public function user()
	{
		return $this->belongsTo('\App\User');
	}
}