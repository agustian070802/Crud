<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::with('spps', 'kelas')->paginate(100);
        return view('fitur.siswa.crud-siswa', compact('siswa'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $siswa = Siswa::query()
            ->where('nama', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('fitur.siswa.crud-siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.siswa.create-siswa');
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
        Siswa::create([
           'nisn' => $request->nisn, 
           'nis' => $request->nis, 
           'nama' => $request->nama, 
           'id_kelas' => $request->id_kelas, 
           'alamat' => $request->alamat, 
           'id_spp' => $request->id_spp, 
           'no_telp' => $request->no_telp, 
        ]);
        return redirect('/crud-siswa')->with('success', 'Data Berhasil Disimpan.!');
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
        $siswaedit = Siswa::findorfail($id);
        return view('fitur.siswa.edit-siswa', compact('siswaedit'));
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
        $siswaedit = Siswa::findorfail($id);
        $siswaedit->update($request->all());
        return redirect('/crud-siswa')->with('success', 'Data Berhasil Di Update.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswaedit = Siswa::findorfail($id);
        $siswaedit->delete();
        return back()->with('info', 'Data Berhasil Di Hapus.!');
    }
}
