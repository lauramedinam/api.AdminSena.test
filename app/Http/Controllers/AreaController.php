<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return $areas;
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
        ]);

        $area = Area::create($request->all());

        return $area;
    }
    public function show($id)
    {
        $area = Area::findOrFail($id);
        return $area;
    }
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'nombre'   => 'sometimes|string',
        ]);
        $area->update($request->all());

        return $area;
    }
    public function destroy(Area $area)
    {
        $area->delete();
        return $area;
    }

}
