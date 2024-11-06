<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
<<<<<<< HEAD
use App\Models\Flashsale;
=======
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();
<<<<<<< HEAD
        $flashsales = FlashSale::where('status', true)->get(); 

        return view('pages.user.index', compact('products','flashsales')); 
    }
=======

        return view('pages.user.index', compact('products'));

    }

>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
    public function detail_product($id)
{
    $product = Product::findOrFail($id);

    return view('pages.user.detail', compact('product'));
}

public function purchase($productId, $userId)
{
    $product = Product::findOrFail($productId);
    $user = User::findOrFail($userId);

    if ($user->point >= $product->price) {
        $totalPoints = $user->point - $product->price;

        $user->update([
            'point' => $totalPoints,
        ]);

        Alert::success('Berhasil!', 'Produk berhasil dibeli!');
        return redirect()->back();
    } else {
        Alert::error('Gagal!', 'Point anda tidak cukup!');
        return redirect()->back();
    }
}

<<<<<<< HEAD
}
=======
}
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
