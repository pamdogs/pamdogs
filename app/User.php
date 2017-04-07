<?php

namespace PamDogs;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

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
    protected $fillable = ['nivel','nombre','apellido','email','nacimiento','telefono','dni_tipo','dni_numero','facebook_id','avatar'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
        Accessors
    */

    public function getNacimientoAttribute($value)
    {
        return Carbon::parse($value);
    }

    /**
        Mutators
    */

    public function setNacimientoAttribute($value)
    {
        $this->attributes['nacimiento'] = Carbon::createFromFormat('d/m/Y',$value)->toDateString();
    }

    /**
        Relationships
    */

    public function mascotas()
    {
        return $this->hasMany('App\Mascota');
    }

    public function cuidadores()
    {
        return $this->hasOne('App\Cuidador');
    }
}
