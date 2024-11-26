<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        return Kamar::all();
    }

    public function store(Request $request)
    {
        return Kamar::create($request->all());
    }

    public function show($id)
    {
        return Kamar::find($id);
    }

    public function update(Request $request, $id)
    {
        $kamar = Kamar::find($id);
        $kamar->update($request->all());
        return $kamar;
    }

    public function destroy($id)
    {
        return Kamar::destroy($id);
    }
}

