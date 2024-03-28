<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    use HasFactory;
    protected $guarded = ['id_varian'];
    protected $primaryKey = 'id_varian';
    protected $table = 'varian';
    public $timestamps = false;
}