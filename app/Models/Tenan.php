<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    use HasFactory;
    protected $table = 'tenans';
    protected $fillable = [
        'kode_tenan',
        'nama_tenan',
        'no_hp',
    ];

    public function barang(){
         /**
         * Has Many to Barang
         *
         * @return Collection
         *
         **/
        return $this->hasMany(Barang::class);
    }

    public function nota(){
        /**
        * Has Many to nota
        *
        * @return Collection
        *
        **/
       return $this->hasMany(Nota::class);
   }
}
