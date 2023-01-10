<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $primaryKey = 'id_product';
    protected $fillable=[
  
           'designation',
          'description',
            'id_categ',
            'id_promo',
           'quantity',
           'price',
          'old_price',
         'image',
           
    ];
    public function category()
    {
        return $this->belongsTo(category::class,'id_categ','id_categ');
    }
    public function promotion()
    {
        return $this->belongsTo(promotion::class,'id_promo','id_promo');
    }
    

}