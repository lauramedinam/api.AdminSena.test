<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function intermedia()
    {
        $cursos = Course::with('teachers')->get();
        return $cursos;
    }

    public function index()
    {
        $courses = Course::all();
        return $courses;
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre_curso'   => 'sometimes|string',
            'dia'   => 'sometimes|date',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course = Course::create($request->all());

        return $course;
    }
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return $course;
    }
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'nombre_curso'   => 'sometimes|string',
            'dia'   => 'sometimes|date',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);
        $course->update($request->all());

        return $course;
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return $course;
    }
}
