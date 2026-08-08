<?php

namespace App\Http\Controllers;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
     public function index()
    {
        $computers = Computer::all();
        return $computers;
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'marca'   => 'sometimes|string',
        ]);

        $computer = Computer::create($request->all());

        return $computer;
    }
    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return $computer;
    }
    public function update(Request $request, Computer $computer)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
            'marca'   => 'sometimes|string',
        ]);
        $computer->update($request->all());

        return $computer;
    }
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return $computer;
    }
}
