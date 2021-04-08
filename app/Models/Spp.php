<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = "spps";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'no_spp',
        'tahun',
        'nominal',
    ];
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_spp', 'id');
    }
    public function transaksi_pembayaran()
    {
        return $this->hasMany(TransaksiPembayaran::class, 'id_spp', 'id');
    }
}
