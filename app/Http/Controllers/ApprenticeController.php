<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
       public function index()
    {
        $apprentices = Apprentice::all();
        return $apprentices;
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'email' => 'sometimes|email',
            'telefono' => 'sometimes|string',
            'computer_id' => 'sometimes|integer',
            'course_id' => 'sometimes|integer',
        ]);

        $apprentice = Apprentice::create($request->all());

        return $apprentice;
    }
    public function show($id)
    {
        $apprentice = Apprentice::findOrFail($id);
        return $apprentice;
    }
    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'email' => 'sometimes|email',
            'telefono' => 'sometimes|string',
            'computer_id' => 'sometimes|integer',
            'course_id' => 'sometimes|integer',
        ]);
        $apprentice->update($request->all());

        return $apprentice;
    }
    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return $apprentice;
    }
}
