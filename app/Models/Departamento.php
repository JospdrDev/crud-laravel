<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{

       protected $fillable = ['nombre', 'ubicacion'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
public function empleados()
{
    return $this->hasMany(Empleado::class);
}

}
