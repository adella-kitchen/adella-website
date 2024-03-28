<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $guarded = ['id_keranjang'];
    protected $primaryKey = 'id_keranjang';
    protected $table = 'keranjang';
    public $timestamps = false;
}