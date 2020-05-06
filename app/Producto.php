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
        'Stock',
        'foto_id'

    ];
    public function producto()
    {
return $this->belongsTo("App\Producto");
    }

    public function foto()
    {
return $this->belongsTo("App\Foto");
    }
}
