<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuenta
 *
 * @property $id
 * @property $no_cuentas
 * @property $tipo_cuenta
 * @property $fecha_apertura
 * @property $nombre_cliente
 * @property $saldo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cuenta extends Model
{
    
    static $rules = [
		'no_cuentas' => 'required',
		'tipo_cuenta' => 'required',
		'fecha_apertura' => 'required',
		'nombre_cliente' => 'required',
		'saldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['no_cuentas','tipo_cuenta','fecha_apertura','nombre_cliente','saldo'];



}
