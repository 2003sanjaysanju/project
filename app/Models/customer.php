<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table ="customer";
    protected $fillable =[
    'name',
    'email',
    'phone_no',
    'time',
    'service',
    'barber',
    'status',
    'date',
    'address',
    ];

}
