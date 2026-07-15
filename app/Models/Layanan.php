<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_layanan', 
        'harga_perkg', 
        'satuan',
        'status'
    ];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'layanan_id', 'id');
    }
}