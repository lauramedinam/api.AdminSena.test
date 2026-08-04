<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;
    // realcion de uno a uno
    public function computer()
    {
        return $this->belongsTo(Computer::class, 'computer_id');
    }
      //Relacion muchos a uno (Inversa a uno a muchos)
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
