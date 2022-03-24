<?php

namespace App\Models;

use App\Models\Autor;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelicula extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peliculas';

    protected $fillable = [
        'id_categoria',
        'id_autor',
        'nombre',
        'fecha_lanzamiento',
        'productora',
    ];
    public $timestamps = false;

    public function autor()
    {
        return $this->hasOne(Autor::class,'id','id_autor');
    }

    public function categoria()
    {
        return $this->hasOne(Categoria::class,'id','id_categoria');
    }
}
