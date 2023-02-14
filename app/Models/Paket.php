<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Outlet;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $fillable = ['outlet_id', 'jenis_paket', 'cucian', 'nama_paket', 'harga'];

    public function outlet(){
        return $this->belongsTo(Outlet::class);
    }
}