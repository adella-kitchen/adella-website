<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;
    protected $guarded = ['id_bahan'];
    protected $primaryKey = 'id_bahan';
    protected $table = 'bahan';
    public $timestamps = false;
}