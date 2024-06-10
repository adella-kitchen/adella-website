<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $guarded = ['id_address'];
    protected $primaryKey = 'id_address';
    protected $table = 'address';
    public $timestamps = false;

   public function user(){
       return $this->belongsTo(User::class, 'id_users', 'id_users');
   }
}