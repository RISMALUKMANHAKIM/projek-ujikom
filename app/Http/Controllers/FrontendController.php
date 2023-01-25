<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Donasi;
use App\Models\Kebutuhan;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kegiatanya()
    {

        $kegiatan = Kegiatan::all();
        return view('frontend.kegiatan', compact('kegiatan'));

    }

    public function kebutuhanya()
    {

        $kebutuhan = Kebutuhan::all();
        return view('frontend.kebutuhan', compact('kebutuhan'));

    }

    public function donasi()
    {
        return view('frontend.donasi');

    }

    public function storeDonasi(Request $request)
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
        Alert::success('Donasi Berhasil', 'Terimakasih atas bantuan dan donasi yang diberikan Bapak/Ibu, untuk anak asuh kami');
        return back();

    }
}
