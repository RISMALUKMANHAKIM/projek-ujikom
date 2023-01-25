<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('donasi.index', compact('donasi'));

    }

    public function cetakForm()
    {
        return view('donasi.cetak');
    }

    public function cetakPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetak = Donasi::whereDate('tanggal', '>=', $tglawal)->whereDate('tanggal', '<=', $tglakhir)->get();
        $total = Donasi::whereDate('tanggal', '>=', $tglawal)->whereDate('tanggal', '<=', $tglakhir)->sum('nominal');
        return view('donasi.cetak-pertanggal', compact('cetak', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donasi.create');

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
            'email' => 'required',
            'no_tlpn' => 'required',
            'tanggal' => 'required',
            'ket' => 'required',
            'nominal' => 'required',
            'bukti' => 'required|image|max:2048',
        ]);

        $donasi = new Donasi;
        $donasi->nama = $request->nama;
        $donasi->email = $request->email;
        $donasi->no_tlpn = $request->no_tlpn;
        $donasi->tanggal = $request->tanggal;
        $donasi->ket = $request->ket;
        $donasi->nominal = $request->nominal;
        // upload image / foto
        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/donasi/', $name);
            $donasi->bukti = $name;
        }
        $donasi->save();
        Alert::success('Good Job', 'Data saved successfully');

        return redirect()->route('donasi.index');

    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\donasi  $donasi
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('donasi.show', compact('donasi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('donasi.edit', compact('donasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required',
            'tanggal' => 'required',
            'ket' => 'required',
            'nominal' => 'required',
            'bukti' => 'required|image|max:2048',
        ]);

        $donasi = Donasi::findOrFail($id);
        $donasi->nama = $request->nama;
        $donasi->email = $request->email;
        $donasi->no_tlpn = $request->no_tlpn;
        $donasi->tanggal = $request->tanggal;
        $donasi->ket = $request->ket;
        $donasi->nominal = $request->nominal;
        // upload image / foto
        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/donasi/', $name);
            $donasi->bukti = $name;
        }
        Alert::success('Good Job', 'Data edited successfully');

        return redirect()->route('donasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();
        Alert::success('Good Job', 'Data deleted successfully');

        return redirect()->route('donasi.index');

    }
}
