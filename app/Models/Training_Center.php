<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Center extends Model
{
    use HasFactory;
    protected $table = 'training_centers';

    protected $fillable =[
        'nombre',
        'ubicacion',
    ];

    //Relacion uno a muchos
    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'teacher_id');
    }

    //Relacion uno a muchos
    public function courses()
    {
        return $this->hasMany(Course::class, 'course_id');
    }
}
