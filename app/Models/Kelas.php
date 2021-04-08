<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama_kelas',
        'kompetensi_keahlian'
    ];
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_kelas', 'id');
    }
    public function transaksi_pembayaran()
    {
        return $this->hasMany(TransaksiPembayaran::class, 'id_kelas', 'id');
    }
}
