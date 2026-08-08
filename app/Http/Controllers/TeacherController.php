<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function intermedia()
    {
        $profesores = Teacher::with('courses')->get();
        return $profesores;
    }


       public function index()
    {
        $teachers = Teacher::all();
        return $teachers;
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'email' => 'sometimes|email|unique:teachers,email',
            'area_id' => 'sometimes|exists:areas,id',
            'training_center_id' => 'sometimes|exists:training_centers,id',
        ]);

        $teacher = Teacher::create($request->all());

        return $teacher;
    }
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return $teacher;
    }
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'email' => 'sometimes|email|unique:teachers,email',
            'area_id' => 'sometimes|exists:areas,id',
            'training_center_id' => 'sometimes|exists:training_centers,id',
        ]);
        $teacher->update($request->all());

        return $teacher;
    }
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return $teacher;
    }
}
