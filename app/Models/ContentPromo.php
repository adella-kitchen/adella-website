<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPromo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [
        'image_path',
    ];
    protected $primaryKey = 'id_promo';
    protected $table = 'content_promo';
}
