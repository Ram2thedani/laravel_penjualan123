<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function detailpenjualan()
    {
        return $this->hasMany(DetailPenjualan::class, 'id_barang', 'id');
    }
}
