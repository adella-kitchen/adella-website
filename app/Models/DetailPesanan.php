<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;
    protected $guarded = ['id_detail_pesanan'];
    protected $primaryKey = 'id_detail_pesanan';
    protected $table = 'detail_pesanan';
    public $timestamps = false;
}