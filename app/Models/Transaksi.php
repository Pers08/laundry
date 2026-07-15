<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'TRANSAKSIS';
    protected $primaryKey = 'ID';  
    protected $keyType = 'int';
    public $incrementing = true;

    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';

    protected $casts = [
        'ID' => 'integer',
    ];


    protected $fillable = [
    'pelanggan_id',
    'tgl_transaksi',
    'tgl_selesai',
    'status_ambil',
    'layanan_id',
    ];

   public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'id');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'TRANSAKSI_ID', 'ID');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }

    public function detail()
    {
        return $this->hasOne(DetailTransaksi::class, 'TRANSAKSI_ID', 'ID');
    }

}