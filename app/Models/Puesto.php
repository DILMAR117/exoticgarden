<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Puesto
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $puesto
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Puesto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'puesto' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','puesto','telefono'];



}
