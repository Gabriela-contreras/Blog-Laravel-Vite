<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    /**
     * Tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'category';


    /**
     * Atributos que se pueden asignar de manera masiva.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',

    ];

    /**
     * Atributos que deben ser ocultados en arrays o JSON.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Relación con la tabla `posts` (si los posts están relacionados con categorías).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'categoria_id');
    }

}
