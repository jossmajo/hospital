<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=['nombre','especialidad','telefono'];
    protected $table='doctores';

}
