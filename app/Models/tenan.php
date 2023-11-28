<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenan extends Model
{
    use HasFactory;
    protected $fillable = ['id','KodeTenan', 'NamaTenan', 'HP'];
    protected $table = 'tenan';
    public $timestamps = false;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'tenan_id');
    }
}
