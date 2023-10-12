<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupcakess extends Model
{
    use HasFactory;
    protected $fillable = ['cupcake-image','cupcake-cost','cupcake-cart'];
}
