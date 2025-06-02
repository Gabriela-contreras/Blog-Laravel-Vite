<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Asegúrate de importar el modelo User
use App\Models\Categoria; // Asegúrate de importar el modelo Categoria

class Post extends Model
{
    use HasFactory;

    /**
     * Tabla asociada al modelo.
     */
    protected $table = 'posts';

    /**
     * Atributos que se pueden asignar de manera masiva.
     */
    protected $fillable = [
        'titulo',       // Título del post
        'contenido',    // Contenido del post
        'image',
        'categoria_id', // ID de la categoría
        'usuario_id',   // ID del usuario
    ];

    /**
     * Cast de fechas
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relación con la tabla `categorias`
     */
    public function categoria()
    {
        return $this->belongsTo(Category::class, 'categoria_id');
    }

    /**
     * Relación con la tabla `users` (usuarios)
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
