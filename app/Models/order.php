<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primaryKey = 'id_order';
    protected $fillable=[
  
        'id_order',  
        'id_user',
        'total',
        'status',
        'delivred',
        'id_detailLivraison',
        
           
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id_user');
    }
    public function detailuser()
    {
        return $this->belongsTo(DetailLivraison::class,'id_detailLivraison','id_detailLivraison');
    }
    public function orderitems()
    {
        return $this->hasMany(order_detail::class,'id_order','id_order');
    }
 
}