<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $primaryKey = 'id_categ';
    protected $fillable=[
  
          
            'name_categ',
         'img_categ',
           
    ];
}
