<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $primaryKey = 'id_contact';
    protected $fillable=[
  
           'id_contact',
        
            'name',
            
           'email',
           'message',
        
           
    ];
}
