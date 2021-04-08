<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPembayaran;
use Illuminate\Http\Request;

class TransaksiPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpembayaran = TransaksiPembayaran::with('users', 'siswa', 'kelas', 'spps')->paginate(100);
        return view('fitur.entri-transaksi-pembayaran.crud-transaksi-pembayaran', compact('tpembayaran'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $tpembayaran = TransaksiPembayaran::query()
            ->where('nama', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('fitur.entri-transaksi-pembayaran.crud-transaksi-pembayaran', compact('tpembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.entri-transaksi-pembayaran.create-transaksi-pembayaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        TransaksiPembayaran::create([ 
           'id_petugas' => $request->id_petugas, 
           'id_siswa' => $request->id_siswa,
           'id_kelas' => $request->id_kelas, 
           'tgl_bayar' => $request->tgl_bayar, 
           'id_spp' => $request->id_spp,
           'jumlah_bayar' => $request->jumlah_bayar,
        ]);
        return redirect('/crud-transaksi-pembayaran')->with('success', 'Data Berhasil Disimpan.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tpembayaranedit = TransaksiPembayaran::findorfail($id);
        return view('fitur.entri-transaksi-pembayaran.edit-transaksi-pembayaran', compact('tpembayaranedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tpembayaranedit = TransaksiPembayaran::findorfail($id);
        $tpembayaranedit->update($request->all());
        return redirect('/crud-transaksi-pembayaran')->with('success', 'Data Berhasil Di Update.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tpembayaranedit = TransaksiPembayaran::findorfail($id);
        $tpembayaranedit->delete();
        return back()->with('info', 'Data Berhasil Di Hapus.!');
    }
}
