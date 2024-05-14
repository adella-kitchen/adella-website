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
}
