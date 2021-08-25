<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index(){
        return products::query()->orderBy('id','DESC')->get();
    }



    public function store(Request $request){
//        return $request;
        $product = new products();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->thumbnail = $request->thumbnail;
        $product->save();
        return   response()->json(
            [
                'code'=>201,
                'message'=>'Thêm mới sản phẩm thành công'
            ]
        );
    }
}
