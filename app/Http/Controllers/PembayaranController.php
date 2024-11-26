<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return Pembayaran::all();
    }

    public function store(Request $request)
    {
        return Pembayaran::create($request->all());
    }

    public function show($id)
    {
        return Pembayaran::find($id);
    }

    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->update($request->all());
        return $pembayaran;
    }

    public function destroy($id)
    {
        return Pembayaran::destroy($id);
    }
}

