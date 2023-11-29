<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'notas';
    protected $fillable = [
        'kode_nota',
        'kode_tenan',
        'kode_kasir',
        'tgl_nota',
        'jumlah_belanja',
        'diskon',
        'total',
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
