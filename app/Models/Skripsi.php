<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'judul', 'nama', 'nim', 'angkatan', 'dosenPembimbing1', 'dosenPembimbing2'
    ];
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
}
