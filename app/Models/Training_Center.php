<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Center extends Model
{
    use HasFactory;
     //Relacion muchos a uno (Inversa a uno a muchos)
    public function teachers()
    {
        return $this->hasMany(Teacher::class, ' teacher_id');
    }
      //Relacion muchos a uno (Inversa a uno a muchos)
    public function courses()
    {
        return $this->hasMany(Course::class, ' teacher_id');
    }
    
}
