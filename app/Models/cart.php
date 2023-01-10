<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id_cart';
    protected $fillable = [

        'total',
        'quantity',
        'id_product',
        'id_user',


    ];
    public function products()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
