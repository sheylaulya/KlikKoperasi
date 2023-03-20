<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function add($products_id){

        $dataProd = Product::find($products_id);
        if($dataProd->users_id != auth()->id()){

            $check = Favorite::where('users_id', auth()->id())->where('products_id', $products_id)->first();

            if($check){
                return redirect('/')->with('massage', 'Already Been Favorite!');
                // return response()->json([
                //     'succes' => false,
                //     'message' => 'Produk sudah ada!',
                // ], 409);

            }else{
                Favorite::insert([
                    'users_id' => auth()->id(),
                    'products_id' => $products_id
                ]);
                return redirect('/')->with('massage', 'Added to Favorite!');
                // return response()->json([
                // 'succes' => true,
                // 'message' => 'berhasil tersimpan!',
                // ], 201);
            }
        }else{
            return redirect('/')->with('massage', 'Cannot Add To Favorite!');
            // return response()->json([
            //     'succes' => false,
            //     'message' => 'gagal tersimpan!',
            // ], 409);
        }


    }

}
