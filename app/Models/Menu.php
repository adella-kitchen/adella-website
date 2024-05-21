<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id_menu'];
    protected $primaryKey = 'id_menu';
    protected $table = 'menu';
    public $timestamps = false;

    public function variants()
    {
        return $this->hasMany(Variant::class, 'id_menu');
    }

    public function detailVariants()
    {
        return $this->hasManyThrough(DetailVariant::class, Variant::class, 'id_menu', 'id_variant');
    }
}
