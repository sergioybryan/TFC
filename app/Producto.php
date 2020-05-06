<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=[
        'Nombre',
        'Categoria',
        'Precio',
        'Descripcion',
        'Stock'

    ];
    public function producto()
    {
return $this->belongsTo("App\Producto");
    }
}
