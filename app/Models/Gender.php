<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory;
    // Realizamos la relacion con la tabla
    protected $table = 'genders';
    // Definimos los campos de la tabla
    protected $fillable = ['name'];
    // Definimos la llave primaria
    protected $primaryKey = 'id';

    public function books():HasMany{
        return $this->hasMany(Book::class);
    }
}
