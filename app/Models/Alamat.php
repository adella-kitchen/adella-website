<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $guarded = ['id_alamat'];
    protected $primaryKey = 'id_alamat';
    protected $table = 'alamat';
    public $timestamps = false;
}