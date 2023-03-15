<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;

    protected $guard='member';

    protected $table='tb_member';
    protected $primaryKey='id_member';

    protected $fillable=[
        'nama',
        'username',
        'password',
        'alamat',
        'jenis_kelamin',
        'tlp',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get all of the comments for the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'id_member');
    }
}
