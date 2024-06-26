<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    protected $guarded = ['id_variant'];
    protected $primaryKey = 'id_variant';
    protected $table = 'variant';
    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }

    public function menuCart()
    {
        return $this->hasOne(Menu::class, 'id_menu', 'id_menu');
    }

    public function detailVariants()
    {
        return $this->hasMany(DetailVariant::class, 'id_variant', 'id_variant');
    }
}