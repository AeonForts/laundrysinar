<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table ='tb_outlet';
    protected $primaryKey ='id_outlet';
    protected $fillable = [
        'nama',
        'alamat',
        'tlp',
    ];

    public function Transaksi(): HasMany

    {
        return $this->hasMany(Transaksi::class,'id_outlet');
    }

    public function user(): HasMany

    {
        return $this->hasMany(User::class,'id_outlet');
    }

}
