<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table='tb_detail_transaksi';
    protected $primaryKey='id_detail_transaksi';

    protected $fillable=[
        'id_transaksi',
        'id_paket',
        'quantity',
        'keterangan',
    ];

    public function transaksi()
    {
       return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id_transaksi' );
    }

    public function paket()
    {
       return $this->belongsTo(Paket::class, 'id_paket', 'id_paket' );
    }
}
