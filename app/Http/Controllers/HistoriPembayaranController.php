<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPembayaran;
use Illuminate\Http\Request;

class HistoriPembayaranController extends Controller
{
    public function index()
    {
        $hpembayaran = TransaksiPembayaran::with('users', 'siswa', 'kelas', 'spps')->paginate(100);
        return view('fitur.histori-pembayaran.histori-pembayaran', compact('hpembayaran'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $hpembayaran = TransaksiPembayaran::query()
            ->where('nisn', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('fitur.histori-pembayaran.histori-pembayaran', compact('hpembayaran'));
    }


}
