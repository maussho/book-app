<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;


class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = ['biography', 'website'];
    protected $primaryKey = 'id';

    public function author():HasOne{
        return $this->hasOne(Author::class);
    }
}
