<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes';
    protected $fillable = ['cust_name', 'guest_name', 'message', 'participants', 'attendance'];
    // protected $primaryKey = 'id';
    
}
