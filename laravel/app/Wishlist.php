<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'wishlists';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'entry'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [''];
	
	/**
	 * User accessor function. Allows access to
	 * the user this wishlist entry belongs to.
	 * 
	 * @return User model
	 */
	public function user()
	{
		return $this->belongsTo('\App\User');
	}
}