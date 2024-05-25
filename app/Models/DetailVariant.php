<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailVariant extends Model
{
    use HasFactory;
    protected $guarded = ['id_detail_variant'];
    protected $primaryKey = 'id_detail_variant';
    protected $table = 'detail_variant';
    public $timestamps = false;

    public function detailCart()
    {
        return $this->belongsTo(DetailCart::class, 'id_detail_cart', 'id_detail_cart');
    }
    public function variant()
    {
        return $this->hasOne(Variant::class, 'id_variant', 'id_variant');
    }
}