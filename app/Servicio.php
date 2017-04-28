<?php

namespace PamDogs;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
  protected $table = "servicios";

  protected $fillable = ['nombre','tar_24h','tar_h','tar_h_extra','mascota_extra','lun','mar','mie','jue','vie','sab','dom','diurno','nocturno','hora_desde','hora_hasta','cuidador_id'];

  public function cuidador()
  {
    return $this->belongsTo('PamDogs\Cuidador');
  }
}
