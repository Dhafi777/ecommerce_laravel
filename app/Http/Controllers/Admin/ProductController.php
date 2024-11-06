<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Distributor;
=======
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa

class ProductController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $data = DB::table('distributors')
                ->join('products','distributors.id','=','products.id_distributor')
                ->select('distributors.*','products.*')
                ->get();

        confirmDelete('Hapus Data!', 'Apakah anda yakin ingin menghapus data ini?');

        return view('pages.admin.product.index', compact('data'));
=======
        $products = Product::all();

        confirmDelete('Hapus Data!','Apakah anda yakin menghapus data ini?');

        return view('pages.admin.product.index', compact('products'));
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
    }

    public function create()
    {
<<<<<<< HEAD
        $distributor = Distributor::all();

        return view('pages.admin.product.create', compact('distributor'));
=======
        return view('pages.admin.product.create');
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
<<<<<<< HEAD
        'id_distributor' => 'required|numeric',
=======
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
        'name' => 'required',
        'price' => 'numeric',
        'category' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:png,jpeg,jpg',
    ]);

    if ($validator->fails()) {
        Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
        return redirect()->back();
    }

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images/', $imageName);
    }

    $product = Product::create([
<<<<<<< HEAD
        'id_distributor' => $request->id_distributor,
=======
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
        'name' => $request->name,
        'price' => $request->price,
        'category' => $request->category,
        'description' => $request->description,
        'image' => $imageName,
    ]);

    if ($product) {
        Alert::success('Berhasil!', 'Produk berhasil ditambahkan!');
        return redirect()->route('admin.product');
    } else {
        Alert::error('Gagal!', 'Produk gagal ditambahkan!');
        return redirect()->back();
    }
}
<<<<<<< HEAD
    public function detail($id)
    {
        $data = DB::table('distributors')
                ->join('products','distributors.id','=','products.id_distributor')
                ->select('distributors.*','products.*')
                ->where('products.id', '=', $id)
                ->first();

        return view('pages.admin.product.detail', compact('data'));
    }

    public function edit($id)
    {
    $product = Product::findOrFail($id);
    $distributor = Distributor::all(); // Retrieve all distributors

    return view('pages.admin.product.edit', compact('product', 'distributor')); // Pass both variables to the view
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_distributor' => 'required|numeric',
            'name'=> 'required',
            'price'=> 'required',
            'category'=> 'required',
            'description'=> 'required',
            'image'=>'nullable|mimes:png,jpeg,jpg',
            ]);

            if ($validator->fails()) {
                Alert::error('Gagal', 'Pastikan semua terisi dengan benar!');
                return redirect()->back();
            }
            $product = Product::findOrFail($id);

            if ($request->hasFile('image')) {
                $oldPath = public_path('images/'. $product->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                $image = $request->file('image');
                $imageName = time() .'.'. $image->getClientOriginalExtension();
                $image->move('images/', $imageName);
            } else {
                $imageName = $product->image;   
            }

            $product->update([
                'id_distributor' => $request->id_distributor,
                'name'=> $request->name,
                'price'=> $request->price,
                'category'=> $request->category,
                'description'=> $request->description,
                'image'=> $imageName
            ]);

            if ($product) {
                Alert::success('Berhasil!','Produk berhasil diperbarui!');
                return redirect()->route('admin.product');
            } else {
                Alert::error('Gagal!','Produk gagal diperbarui!');
                return redirect()->back();
    }
}

public function delete($id) {
    $product = Product::findOrFail($id);

    $oldPath = public_path('images/'. $product->image);
    if (File::exists($oldPath)) {  
=======

public function detail($id)
{
    $product = Product::findOrFail($id);

    return view('pages.admin.product.detail', compact('product'));
}

public function edit($id)
{
    $product = Product::findOrFail($id);

    return view('pages.admin.product.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'price' => 'numeric',
        'category' => 'required',
        'description' => 'required',
        'image' => 'nullable|mimes:png,jpeg,jpg',
    ]);

    if ($validator->fails()) {
        Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
        return redirect()->back();
    }

    $product = Product::findOrFail($id);

    if ($request->hasFile('image')) {
        $oldPath = public_path('images/' . $product->image);
        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images/', $imageName);
    } else {
        $imageName = $product->image;
    }

    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'category' => $request->category,
        'description' => $request->description,
        'image' => $imageName,
    ]);

    if ($product) {
        Alert::success('Berhasil!', 'Produk berhasil diperbarui!');
        return redirect()->route('admin.product');
    } else {
        Alert::error('Gagal!', 'Produk gagal diperbarui!');
        return redirect()->back();
    }
}

public function delete($id)
{
    $product = Product::findOrFail($id);

    $oldPath = public_path('images/' . $product->image);
    if (File::exists($oldPath)) {
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
        File::delete($oldPath);
    }

    $product->delete();

    if ($product) {
<<<<<<< HEAD
        Alert::success('Berhasil!','Produk berhasil dihapus!');
        return redirect()->back();
    } else {
        Alert::error('Gagal!','Produk gagal dihapus!');
        return redirect()->back();
    }
}
=======
        Alert::success('Berhasil!', 'Produk berhasil dihapus!');
        return redirect()->back();
    } else {
        Alert::error('Gagal!', 'Produk gagal dihapus!');
        return redirect()->back();
    }
}




>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
}