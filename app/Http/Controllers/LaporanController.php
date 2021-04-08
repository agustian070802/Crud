<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPembayaran;
use Illuminate\Http\Request;
use Dompdf\Dompdf;


class LaporanController extends Controller
{
    public function index()
    {
        $lpembayaran = TransaksiPembayaran::with('users', 'siswa', 'kelas', 'spps')->paginate(100);
        return view('fitur.laporan.laporan', compact('lpembayaran'));
    }
    public function laporanpdf()
    {
        $lpembayaran = TransaksiPembayaran::with('users', 'siswa', 'kelas', 'spps')->paginate(100);
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('fitur.laporan.laporan-pdf', compact('lpembayaran')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Laporan-pdf');
    }
}
