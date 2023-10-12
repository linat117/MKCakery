<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookies extends Model
{
    use HasFactory;
    
    protected $fillable = ['cookies-image','cookies-heading', 'cookies-description','cookies-cart'];
}
