<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nisn',
        'nis',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp'
    ];
    public function spps()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
    public function transaksi_pembayaran()
    {
        return $this->hasMany(TransaksiPembayaran::class, 'id_siswa', 'id');
    }
}
