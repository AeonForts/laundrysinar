<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table='tb_paket';
    protected $primaryKey='id_paket';

    protected $fillable=[
        'id_outlet',
        'jenis',
        'nama_paket',
        'harga',

    ];



    // public function outlet()
    // {
    //     return $this->hasOne('App\Models\Outlet', 'id_outlet');
    // }

    public function outlet()
    {
       return $this->belongsTo(Outlet::class, 'id_outlet', 'id_outlet' );
    }

    public function DetailTransaksi(): HasMany

    {
        return $this->hasMany(DetailTransaksi::class,'id_paket');
    }

}

