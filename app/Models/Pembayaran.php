<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'PEMBAYARANS'; 
    
    protected $primaryKey = 'id'; 

        protected $fillable = [
        'transaksi_id',          
        'tgl_bayar', 
        'total_bayar', 
        'metode_pembayaran'
        ];
    public function getTotalBayarFormattedAttribute()
    {
        $nilai = $this->TOTAL_BAYAR ?? 0;

        return "Rp " . number_format($nilai, 0, ',', '.');
    }
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id', 'id'); // ← huruf kecil
    }
}