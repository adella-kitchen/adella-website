<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $guarded = ['id_ingredient'];
    protected $primaryKey = 'id_ingredient';
    protected $table = 'ingredient';
    public $timestamps = false;
}