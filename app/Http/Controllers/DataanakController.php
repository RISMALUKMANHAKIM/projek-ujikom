<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Dataanak;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataanakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataanak = Dataanak::all();
        return view('dataanak.index', compact('dataanak'));

        // //ubah ke JSON
        // return response()->json([
        //     'success' => true,
        //     'message' => 'List Data Anak',
        //     'data' => $dataanak,
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataanak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tempat' => 'required',
            'ttl' => 'required',
            'pendidikan' => 'required',
            'wali' => 'required',
        ]);

        $dataanak = new Dataanak;
        $dataanak->nama = $request->nama;
        $dataanak->umur = Carbon::parse($request->ttl)->age;
        $dataanak->tempat = $request->tempat;
        $dataanak->ttl = $request->ttl;
        $dataanak->pendidikan = $request->pendidikan;
        $dataanak->wali = $request->wali;
        $dataanak->save();
        Alert::success('Good Job', 'Data saved successfully');

        return redirect()->route('dataanak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataanak = Dataanak::findOrFail($id);
        return view('dataanak.show', compact('dataanak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataanak = Dataanak::findOrFail($id);
        return view('dataanak.edit', compact('dataanak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'tempat' => 'required',
            'ttl' => 'required',
            'pendidikan' => 'required',
            'wali' => 'required',
        ]);

        $dataanak = Dataanak::findOrFail($id);
        $dataanak->nama = $request->nama;
        $dataanak->umur = $request->umur;
        $dataanak->tempat = $request->tempat;
        $dataanak->ttl = $request->ttl;
        $dataanak->pendidikan = $request->pendidikan;
        $dataanak->wali = $request->wali;
        $dataanak->save();

        Alert::success('Good Job', 'Data edited successfully');

        return redirect()->route('dataanak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataanak = Dataanak::findOrFail($id);
        $dataanak->delete();

        Alert::success('Good Job', 'Data deleted successfully');
        return redirect()->route('dataanak.index');
    }
}
