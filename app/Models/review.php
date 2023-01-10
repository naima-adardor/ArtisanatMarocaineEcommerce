<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table='reviews';
    protected $primaryKey = 'id_review';
    protected $fillable=[
  
        
        'id_user',
        'id_product',
        'review',
           
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id_user');
    }
    public function rating()
    {
        return $this->belongsTo(rating::class,'id_user','id_user');
    }
    public function product()
    {
        return $this->belongsTo(product::class,'id_product','id_product');
    }
}
