<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $guarded = ['id_discount'];
    protected $primaryKey = 'id_discount';
    protected $table = 'discount';
    public $timestamps = false;
}