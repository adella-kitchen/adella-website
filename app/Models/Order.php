<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id_order'];
    protected $primaryKey = 'id_order';
    protected $table = 'order';
    public $timestamps = false;
}
