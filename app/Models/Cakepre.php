<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cakepre extends Model
{
    use HasFactory;
    protected $fillable = ['cakepre-image','cakepre-heading', 'cakepre-description','cakepre-cart'];
}
