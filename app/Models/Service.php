<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['years-experience', 'skilled-professional','total-product','orders-everyday','service-heading','service-description','service-image'];
}
