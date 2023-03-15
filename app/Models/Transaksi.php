<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;

    protected $table='tb_transaksi';
    protected $primaryKey='id_transaksi';

    protected $fillable=[
        'id_outlet',
        'kode_invoice',
        'id_member',
        'id_paket',
        'quantity',
        'keterangan',
        'tgl',
        'batas_waktu',
        'tgl_bayar',
        'biaya_tambahan',
        'diskon',
        'pajak',
        'total',
        'status',
        'dibayar',
        'id_user',
        
    ];

    public $timestamps=false;

    public function Outlet(): BelongsTo
    {
       return $this->belongsTo(Outlet::class, 'id_outlet', 'id_outlet');
    }

    public function Member(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'id_member', 'id_member');
    }

    public function DetailTransaksi(): HasMany
    {
        return $this->hasMany(DetailTransaksi::class, 'id_detail_transaksi');
    }

    // public function user(): belongsTo
    // {
    //     return $this->belongsTo(User::class, 'id_outlet', 'id_outlet');
    // }

}
