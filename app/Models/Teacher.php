<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable =
    [
        'nombre',
        'email',
        'area_id',
        'training_center_id',
    ];
    // Relacion Muchos a Muchos
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher', 'teacher_id', 'course_id');
    }
  //Relacion muchos a uno (Inversa a uno a muchos)
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
     //Relacion muchos a uno (Inversa a uno a muchos)
    public function training_center()
    {
        return $this->belongsTo(Training_Center::class, 'training_center_id');
    }

}
