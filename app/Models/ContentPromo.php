<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPromo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'image',
        'judul_promo',
        'tgl_mulai',
        'tgl_selesai',
        'deskripsi_promo',
    ];
    protected $primaryKey = 'id_promo';
    protected $table = 'content_promo';
}
