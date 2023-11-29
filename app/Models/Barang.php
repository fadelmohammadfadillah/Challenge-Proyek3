<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = [
        'kode_barang',
        'kode_tenan',
        'nama_barang',
        'satuan',
        'harga_satuan',
        'stok',
    ];

    public function tenan(){
        /**
         * Belong to Tenan
         *
         * @return Collection
         *
         **/
        return $this->belongsTo(Tenan::class);
    }
}
