<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'genders';
    protected $fillable = ['name'];
    protected $primaryKey = 'id';

    public function books():HasMany{
        return $this->hasMany(Book::class);
    }
}
