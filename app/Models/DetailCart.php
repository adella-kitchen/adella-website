<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCart extends Model
{
    use HasFactory; protected
    $guarded = ['id_detail_cart'];
    protected $primaryKey = 'id_detail_cart';
    protected $table = 'detail_cart';
    public $timestamps = false;

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'id_cart', 'id_cart');
    }

    public function detailVariant()
    {
        return $this->belongsTo(DetailVariant::class, 'id_detail_variant', 'id_detail_variant');
    }
}