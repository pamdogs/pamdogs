<?php

namespace PamDogs;

use Illuminate\Database\Eloquent\Model;

class PrevUser extends Model
{
    protected $table = "prev_users";

    protected $fillable = ['name','email','city','place','phone','description'];

    protected $hidden = ['remember_token'];
}
