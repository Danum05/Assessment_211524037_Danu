<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;
    protected $fillable = ['id','KodeKasir', 'Nama', 'HP'];
    protected $table = 'kasir';
    public $timestamps = false;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'kasir_id');
    }
}
