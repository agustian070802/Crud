<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPembayaran extends Model
{
    protected $table = "transaksi_pembayarans";
    protected $primaryKey = "id";
    protected $dates = ['tgl_bayar'];
    protected $fillable = [
        'id',
        'id_petugas',
        'id_siswa',
        'nisn',
        'id_kelas',
        'tgl_bayar',
        'id_spp',
        'jumlah_bayar',
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'id_petugas', 'id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
    public function spps()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id');
    }
}
