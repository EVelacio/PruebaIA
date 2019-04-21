<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Veterinario
 * @package App\Models
 * @version April 21, 2019, 1:38 am UTC
 *
 * @property string vet_cedula
 * @property integer usuarios_id
 * @property integer horarios_id
 */
class Veterinario extends Model
{

    public $table = 'veterinarios';
    


    public $fillable = [
        'vet_cedula',
        'usuarios_id',
        'horarios_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vet_cedula' => 'string',
        'usuarios_id' => 'integer',
        'horarios_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vet_cedula' => 'required'
    ];

    
}
