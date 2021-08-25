<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index(){
        return Furniture::query()->orderBy('product-code','DESC')->get();
    }



    public function store(Request $request){

        $product = new Furniture();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->avatar = $request->avatar;
        $product->save();
        return   response()->json(
            [
                'code'=>201,
                'message'=>'Thêm mới sản phẩm thành công'
            ]
        );
    }
}
