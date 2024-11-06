<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['id_distributor','name', 'price', 'category', 'description', 'image'];
=======
    protected $fillable = [
        'name', 'price', 'category','description','image'
    ];
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
}
