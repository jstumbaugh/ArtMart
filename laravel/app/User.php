<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	
	/**
	 * Artwork accessor function. Allows access to all
	 * artwork posted by this user.
	 * 
	 * @return Artwork model array
	 */
	public function artworks()
	{
		// [JM] TODO: implement some sort of better "rank weight" based on purchases and views?
		return $this->hasMany('\App\Artwork')->orderBy('num_purchases', 'desc')->orderBy('num_views', 'desc')->orderBy('created_at', 'desc');
	}
	
	/**
	 * Search history accessor function. Allows access to
	 * user's search history.
	 * 
	 * @return SearchHistory model array
	 */
	public function searchhistory()
	{
		return $this->hasMany('\App\SearchHistory');
	}
	
	/**
	 * Wishlist history accessor function. Allows access to
	 * user's wishlist.
	 * 
	 * @return Wishlist model array
	 */
	public function wishlist()
	{
		return $this->hasMany('\App\Wishlist');
	}
	
	/**
	 * Total artwork views accessor.
	 *
	 * @return Total number of artwork views for this artist
	 */
	public function total_views()
	{
		return $this->artworks()->sum('num_views');
	}
	
	/**
	 * Total artwork purchases accessor.
	 * 
	 * @return Total number of artwork purchases for this artist
	 */
	public function total_purchases()
	{
		return $this->artworks()->sum('num_purchases');
	}
}