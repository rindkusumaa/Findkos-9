<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    public function index()
    {
        return Penghuni::all();
    }

    public function store(Request $request)
    {
        return Penghuni::create($request->all());
    }

    public function show($id)
    {
        return Penghuni::find($id);
    }

    public function update(Request $request, $id)
    {
        $penghuni = Penghuni::find($id);
        $penghuni->update($request->all());
        return $penghuni;
    }

    public function destroy($id)
    {
        return Penghuni::destroy($id);
    }
}

