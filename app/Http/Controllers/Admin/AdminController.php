<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Flashsale;
=======
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $users = User::count();
<<<<<<< HEAD
        $flashsales = Flashsale::count();  // Assuming you have a FlashSale model


        return view('pages.admin.index', compact('products', 'users', 'flashsales'));
    }
}
=======

        return view('pages.admin.index', compact('products', 'users'));
    }
}
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
