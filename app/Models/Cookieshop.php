<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookieshop extends Model
{
    use HasFactory;
    
    protected $fillable = ['cooki-image','cooki-cost','cooki-cart'];
}
