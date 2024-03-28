<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailVarian extends Model
{
    use HasFactory;
    protected $guarded = ['id_detail_varian'];
    protected $primaryKey = 'id_detail_varian';
    protected $table = 'detail_varian';
    public $timestamps = false;
}