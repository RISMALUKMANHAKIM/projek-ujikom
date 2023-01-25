<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Kebutuhan;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhan = Kebutuhan::all();
        return view('kebutuhan.index', compact('kebutuhan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kebutuhan.create');

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
            'kebutuhan_harian' => 'required',
            'kebutuhan_obat' => 'required',
        ]);

        $kebutuhan = new Kebutuhan;
        $kebutuhan->kebutuhan_harian = $request->kebutuhan_harian;
        $kebutuhan->kebutuhan_obat = $request->kebutuhan_obat;
        $kebutuhan->save();
        Alert::success('Good Job', 'Data saved successfully');

        return redirect()->route('kebutuhan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kebutuhan = Kebutuhan::findOrFail($id);
        return view('kebutuhan.show', compact('kebutuhan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kebutuhan = Kebutuhan::findOrFail($id);
        return view('kebutuhan.edit', compact('kebutuhan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kebutuhan_harian' => 'required',
            'kebutuhan_obat' => 'required',
        ]);

        $kebutuhan = Kebutuhan::findOrFail($id);
        $kebutuhan->kebutuhan_harian = $request->kebutuhan_harian;
        $kebutuhan->kebutuhan_obat = $request->kebutuhan_obat;
        $kebutuhan->save();
        Alert::success('Good Job', 'Data edited successfully');

        return redirect()->route('kebutuhan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kebutuhan = Kebutuhan::findOrFail($id);
        $kebutuhan->delete();
        Alert::success('Good Job', 'Data deleted successfully');

        return redirect()->route('kebutuhan.index');

    }
}
