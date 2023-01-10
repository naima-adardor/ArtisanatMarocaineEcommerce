<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'id_detail';
    protected $fillable = [

        'id_product',

        'id_order',

        'quatity',
        'price',


    ];
    // public function order()
    // {
    //     return $this->belongsTo(order::class,'id_order','id_order');
    // }
    public function product()
    {
        return $this->belongsTo(product::class, 'id_product', 'id_product');
    }
}
