<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi'; // sesuaikan dengan nama tabel yang Anda gunakan
    protected $fillable = [
        'KodeNota',
        'KodeTenan',
        'KodeKasir',
        'TglNota',
        'JamNota',
        'JumlahBelanja',
        'Diskon',
        'Total',
    ];

    public function tenan()
    {
        return $this->belongsTo(Tenan::class, 'KodeTenan');
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'KodeKasir');
    }
}
