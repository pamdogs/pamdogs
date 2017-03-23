<?php

namespace PamDogs;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Mascota extends Model
{
    protected $table = "mascotas";

    protected $fillable = ['nombre','nacimiento','genero','raza','personalidad','duerme','con_perros','con_chicos','salta','celo','vaccuna','esterilizado','vet_nombre','vet_phone','vet_address','seguro','compania_seguro'];

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

    public function cliente()
    {
    	return $this->belongsTo('App\User');
    }

}
