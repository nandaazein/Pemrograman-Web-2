<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index(){
        return view('welcome', [
            'products' => Product::all()
        ]);
    }
    public function tambah(){
        return view('tambah');
    }

    public function simpan(Request $request) {
        $validasiData = $request->validate([
            'product_name' => 'required|max:255',
            'product_price' => 'required',
            'product_image' => 'image|max:1024',
        ]);

        $file = $request->file('product_image');
        if ($file) {
            $filename = 'image-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $validasiData['product_image'] = $filename;
        }
        Product::create($validasiData);
        return redirect('/')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $validasiData = $request->validate([
            'product_name' => 'required|max:255',
            'product_price' => 'required',
            'product_image' => 'image|max:2000',
        ]);

        $file = $request->file('product_image');
        if ($file) {
            if ($request->product_image_old) {
                Storage::delete('public/images/' . $product->product_image);
            }
            $filename = 'image-' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $validasiData['product_image'] = $filename;
        }

        Product::where('id', $id)->update($validasiData);

        return redirect('/')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id) {
        $product = Product::find($id);
        if ($product->product_image) {
            Storage::delete('public/images/' . $product->product_image);
        }
        Product::destroy('id', $id);

        return redirect('/')->with('success', 'Data Berhasil Dihapus');
    }

    public function tampilkan(){
        $data = Product::all();
        return view('product/index')->with('data', $data);
    }
    

}
