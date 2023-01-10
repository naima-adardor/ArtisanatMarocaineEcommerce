<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    use HasFactory;
    protected $table='promotions';
    protected $primaryKey = 'id_promo';
    protected $fillable=[
    'designation',
    'discount',
    'dateD',
    'dateF',
    'img_promo',
          
    ];
}
