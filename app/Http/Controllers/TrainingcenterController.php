<?php

namespace App\Http\Controllers;
use App\Models\Training_Center;
use Illuminate\Http\Request;

class TrainingcenterController extends Controller
{
    public function index()
    {
        $training_centers = Training_Center::all();
        return $training_centers;
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'ubicacion'   => 'sometimes|string',
        ]);

        $training_center = Training_Center::create($request->all());

        return $training_center;
    }
    public function show($id)
    {
        $training_center = Training_Center::findOrFail($id);
        return $training_center;
    }
    public function update(Request $request,Training_Center $training_center)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'ubicacion'   => 'sometimes|string',
        ]);
        $training_center->update($request->all());

        return $training_center;
    }
    public function destroy(Training_Center $training_center)
    {
        $training_center->delete();
        return $training_center;
    }
}
