<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id_menu'];
    protected $primaryKey = 'id_menu';
    protected $table = 'menu';
    public $timestamps = false;

    public function variants()
    {
        return $this->hasMany(Variant::class, 'id_menu', 'id_menu');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id_menu', 'id_menu');
    }

    public function detailVariant()
    {
        return $this->belongsTo(DetailVariant::class, 'id_detail_variant', 'id_detail_variant');
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'id_variant', 'id_variant');
    }
}