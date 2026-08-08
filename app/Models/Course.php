<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable =[
        'nombre_curso',
        'dia',
        'area_id',
        'training_center_id',
    ];
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'course_teacher', 'teacher_id', 'course_id');
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
    // Relacion Uno a Muchos
    public function apprentices()
    {
        return $this->hasMany(Apprentice::class, 'apprentices_id');
    }


}
