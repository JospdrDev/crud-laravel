<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'email', 'dni', 'departamento_id'];
        public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
public function departamento()
{
    return $this->belongsTo(Departamento::class);
}

}


?>