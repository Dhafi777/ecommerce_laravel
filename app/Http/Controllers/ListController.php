<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
<<<<<<< HEAD
use App\Models\skripsi;
=======
use App\Models\Skripsi;
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa

class ListController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $admins = Admin::all(); //menampilkan semua data pada tabel Admin
        $users = User::all(); 
        $skripsis = skripsi::all();//menampilkan semua data pada tabel user

        return view('beranda', compact('admins', 'users', 'skripsis'));
=======
        $admins = Admin::all(); // menampilkan semua data pada tabel Admin
        $users = User::all(); // menampilkan semua data pada tabel User
        $skripsis = Skripsi::all(); // menampilkan semua data pada tabel User

        return view('Welcome', compact('admins', 'users','skripsis'));
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
    }
}
