<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientNeeds extends Model
{
    use HasFactory;
    protected $guarded = ['id_ingredient_needs'];
    protected $primaryKey = 'id_ingredient_needs';
    protected $table = 'ingredient_needs';
    public $timestamps = false;
}