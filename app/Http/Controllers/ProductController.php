<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productList =  ProductModel::all();
        return view("productview/front",compact("productList"));
    }
    public function show($id){
        $item = ProductModel::find($id);
        return view("productview/detail",compact("item"));
    }
    public function create(){ // open view
        return view("productview.add");
    }
    public function store(Request $request ){ //Save to data
        // return $request; // debug only
        $this->validate($request,[
            "title"=> "required",
            "qty"=>"required",
            "price" => "required",
        ]);
        ProductModel::create($request->all());
        return redirect()->route("product.index");
    }
    
    public function edit($id){ //open view
        $item = ProductModel::find($id);
        return view("productview.change",compact("item"));
    }
    public function update(Request $request,$id){ //Save to data
        
         // return $request; // debug only

        $this->validate($request,[
            "title"=> "required",
            "qty"=>"required",
            "price" => "required",
        ]);
        ProductModel::find($id)->update($request->all());
        return redirect()->route("product.index");
    }

    public function destroy($id){ //delete data
        // return $id; //debug only

        ProductModel::find($id)->delete();
        return redirect()->route("product.index");
    }
}
