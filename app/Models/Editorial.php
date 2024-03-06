<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Editorial extends Model
{
    use HasFactory;

    // creamos una referencia a la tabla de la migracion editorials
    // ESTOS CAMPOS SON OPCIONALES, laravel hace referencia el nombre de editorial con editorials 
    protected $table = 'editorials';
    // Colocamos los campos de las migraciones, no se pone el id
    //Porque este modelo estará en el formulario para el cliente, el id no es editable
    protected $fillable = ['name', 'address', 'phone', 'country'];
    protected $primaryKey = 'id';

    public function books():HasMany{
        return $this->hasMany(Book::class);
    }
}
