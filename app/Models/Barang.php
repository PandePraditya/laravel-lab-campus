<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode_ruangan',
        'nama_barang',
        'jenis_barang',
        'jumlah_barang',
        'keterangan',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'kode_ruangan', 'id');
    }
}
