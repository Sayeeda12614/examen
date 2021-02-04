<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autor;

class Libro extends Model
{
    use HasFactory;
    protected $table = "libros";
    protected $fillable = [
        'id',
        'titulo',
        'isbn',
        'autor',
        'caratula'
    ];
    public function autores()
    {
        return $this->belongsTo(Autor::class, "autor", "id");
    }
}
