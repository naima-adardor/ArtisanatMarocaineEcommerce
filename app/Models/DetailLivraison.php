<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLivraison extends Model
{
    use HasFactory;
    protected $table = 'detail_Livraisons';
    protected $primaryKey = 'id_detailLivraison';
    protected $fillable = [

        'id_detailLivraison',
        'lastName',
        'firstName',
        'country',
        'city',
        'Numero',
        'zipCode',
        'adresse',
        'email',



    ];
}
