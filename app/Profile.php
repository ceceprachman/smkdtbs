<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    /**
     * The database table used by Model
     *
     * @var string
     *
     */
    protected $table = 'profiles';

    /**
     * Fillable field might be massassigment
     *
     * @var array
     */
    protected $fillable = ['username', 'phone', 'name', 'email'];

    /**
     * User profile owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'username');
    }

}
