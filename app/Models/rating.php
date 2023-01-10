<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;
    protected $table='ratings';
    protected $primaryKey = 'id_rating';
    protected $fillable=[
  
        'id_rating',  
        'id_user',
        'id_product',
        'stars_rated',
        
        
           
    ];
}
