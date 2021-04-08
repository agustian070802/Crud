<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('fitur.kelas.crud-kelas', compact('kelas'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $kelas = Kelas::query()
            ->where('nama_kelas', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('fitur.kelas.crud-kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.kelas.create-kelas');
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
        Kelas::create([
           'nama_kelas' => $request->nama_kelas, 
           'kompetensi_keahlian' => $request->kompetensi_keahlian, 
        ]);
        return redirect('/crud-kelas')->with('success', 'Data Berhasil Disimpan.!');
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
        $kelasedit = Kelas::findorfail($id);
        return view('fitur.kelas.edit-kelas', compact('kelasedit'));
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
        $petugasedit = Kelas::findorfail($id);
        $petugasedit->update($request->all());
        return redirect('/crud-kelas')->with('success', 'Data Berhasil Di Update.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelasedit = Kelas::findorfail($id);
        $kelasedit->delete();
        return back()->with('info', 'Data Berhasil Di Hapus.!');
    }
}
