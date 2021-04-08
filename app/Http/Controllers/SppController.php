<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index()
    {
        $spp = Spp::all();
        return view('fitur.spp.crud-spp', compact('spp'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $spp = Spp::query()
            ->where('no_spp', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('fitur.spp.crud-spp', compact('spp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.spp.create-spp');
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
        Spp::create([
           'id' => $request->id, 
           'no_spp' => $request->no_spp, 
           'tahun' => $request->tahun, 
           'nominal' => $request->nominal, 
        ]);
        return redirect('/crud-spp')->with('success', 'Data Berhasil Disimpan.!');
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
        $sppedit = spp::findorfail($id);
        return view('fitur.spp.edit-spp', compact('sppedit'));
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
        $sppedit = Spp::findorfail($id);
        $sppedit->update($request->all());
        return redirect('/crud-spp')->with('success', 'Data Berhasil Di Update.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sppedit = Spp::findorfail($id);
        $sppedit->delete();
        return back()->with('info', 'Data Berhasil Di Hapus.!');
    }
}
