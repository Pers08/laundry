<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'DETAIL_TRANSAKSIS';
    protected $primaryKey = 'id';        //  
    public $timestamps = false;

    protected $fillable = [
        'transaksi_id',     // 
        'layanan_id', 
        'jumlah_qty', 
        'subtotal'
    ];

    public function layanan() {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');  // 
    }
}