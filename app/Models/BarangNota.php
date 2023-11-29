<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    use HasFactory;
    protected $table = 'barang_notas';
    protected $fillable = [
        'kode_nota',
        'kode_barang',
        'jumlah_barang',
        'harga_satuan',
        'jumlah'
    ];
}
