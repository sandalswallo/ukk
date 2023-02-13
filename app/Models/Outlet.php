<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlet';
    protected $fillable = ['nama_outlet', 'telepon', 'alamat',];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
}
}