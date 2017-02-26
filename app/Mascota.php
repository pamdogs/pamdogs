<?php

namespace PamDogs;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = "mascotas";

    protected $fillable = ['nombre','nacimiento','genero','raza','personalidad','duerme','con_perros','con_chicos','salta','celo','vaccuna','esterilizado','vet_nombre','vet_phone','vet_address','seguro','compania_seguro'];

    public function cliente()
    {
    	return $this->belongsTo('App\User');
    }

}

