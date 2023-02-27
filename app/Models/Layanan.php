<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];

    public function paket(){
        return $this->belongsToMany(Paket::class);
    }
}
