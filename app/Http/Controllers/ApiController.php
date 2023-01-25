<?php

namespace App\Http\Controllers;

use App\Models\Dataanak;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {

        $dataanak = Dataanak::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Anak',
            'data' => $dataanak,
        ], 200);

    }

    public function create()
    {
//
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'ttl' => 'required',
            'pendidikan' => 'required',
            'wali' => 'required',
        ]);

        $dataanak = new Dataanak;
        $dataanak->nama = $request->nama;
        $dataanak->umur = $request->umur;
        $dataanak->ttl = $request->ttl;
        $dataanak->pendidikan = $request->pendidikan;
        $dataanak->wali = $request->wali;
        $dataanak->save();

        return response()->json([
            'success' => true,
            'message' => 'List Data Anak',
            'data' => $dataanak,
        ], 200);

    }

    public function show($id)
    {
        $dataanak = Dataanak::find($id);
        return response()->json([
            'success' => true,
            'message' => 'List Data Anak',
            'data' => $dataanak,
        ], 200);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $dataanak = Dataanak::findOrFail($id);
        $dataanak->nama = $request->nama;
        $dataanak->umur = $request->umur;
        $dataanak->ttl = $request->ttl;
        $dataanak->pendidikan = $request->pendidikan;
        $dataanak->wali = $request->wali;
        $dataanak->save();

        return response()->json([
            'success' => true,
            'message' => 'List Data Anak',
            'data' => $dataanak,
        ], 200);

    }
}
