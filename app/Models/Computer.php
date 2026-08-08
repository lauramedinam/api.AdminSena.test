<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $table = 'computers';
    protected $fillable = [
        'nombre',
        'marca'
    ];
      //realcion de uno  a uno
    public function apprentice()
    {
        return $this->hasOne(Apprentice::class, 'apprentice_id');
    }

}
