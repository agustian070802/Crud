<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = User::all();
        return view('fitur.petugas.crud-petugas', compact('petugas'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $petugas = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('fitur.petugas.crud-petugas', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fitur.petugas.create-petugas');
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
        User::create([
           'name' => $request->name, 
           'level' => $request->level, 
           'password' => $request->password,  
        ]);
        return redirect('/crud-petugas')->with('success', 'Data Berhasil Disimpan.!');
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
        $petugasedit = User::findorfail($id);
        return view('fitur.petugas.edit-petugas', compact('petugasedit'));
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
        $petugasedit = User::findorfail($id);
        $petugasedit->update($request->all());
        return redirect('/crud-petugas')->with('success', 'Data Berhasil Di Update.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugasedit = User::findorfail($id);
        $petugasedit->delete();
        return back()->with('info', 'Data Berhasil Di Hapus.!');
    }
}
