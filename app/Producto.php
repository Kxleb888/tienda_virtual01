<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Nombre
 * @property $Precio
 * @property $Descripcion
 * @property $Cantidad
 * @property $Categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Precio' => 'required',
		'Descripcion' => 'required',
		'Cantidad' => 'required',
		'Categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Precio','Descripcion','Cantidad','Categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Venta', 'productos_id', 'id');
    }
    

}
