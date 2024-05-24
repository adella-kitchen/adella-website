<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = ['id_cart'];
    protected $primaryKey = 'id_cart';
    protected $table = 'cart';
    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }

    public function detailCart()
    {
        return $this->hasMany(DetailCart::class, 'id_cart', 'id_cart');
    }
}