<?php

namespace PamDogs;

use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
  protected $table = "cuidadores";

  protected $fillable = ['nombre','nacimiento','genero','raza','personalidad','duerme','con_perros','con_chicos','salta','celo','vacuna','esterilizado','vet_nombre','vet_phone','vet_address','seguro','compania_seguro','user_id'];

  /*
      Accessors


  public function getNacimientoAttribute($value)
  {
      return Carbon::parse($value);
  }


      Mutators


  public function setNacimientoAttribute($value)
  {
      $this->attributes['nacimiento'] = Carbon::createFromFormat('d/m/Y',$value)->toDateString();
  }*/

  public function cliente()
  {
    return $this->belongsTo('PamDogs\User');
  }

  public function servicios()
  {
      return $this->hasMany('PamDogs\Servicio');
  }
}
