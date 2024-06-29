<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        $data =[
            [
                'id'=>'1',
                'name'=>'c1',
                'namsinh'=>'2004'
            ],
            [
                'id'=>'2',
                'name'=>'c2',
                'namsinh'=>'2004'
            ],
            [
                'id'=>'3',
                'name'=>'c3',
                'namsinh'=>'2004'
            ],
        ];
        return view('list-product')->with([
            'listProduct' => $data
        ]);
    }
    public function getProduct($id,$name='')
    {
        echo $id;
        echo $name;
    }
    public function updateProduct(Request $request)
    {
        echo $request->id;
        echo  $request->name;
    }
}
