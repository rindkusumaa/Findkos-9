<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        return Fasilitas::all();
    }

    public function store(Request $request)
    {
        return Fasilitas::create($request->all());
    }

    public function show($id)
    {
        return Fasilitas::find($id);
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->update($request->all());
        return $fasilitas;
    }

    public function destroy($id)
    {
        return Fasilitas::destroy($id);
    }
}
