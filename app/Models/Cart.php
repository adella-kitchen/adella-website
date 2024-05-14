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
}
