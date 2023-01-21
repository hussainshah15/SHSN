<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\users;
use Illuminate\Support\Facades\Session;

class ProdctController extends Controller
{
    //
    function index()
    {

        $data=Product::all();
        return view('product',['products'=>$data]);

    }
    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);

        


    }
    function search(Request $req){
        $data =Product::where('name', 'like', '%'.$req->input('query').'%')->get();
             return view('search',['products'=>$data]);


  }
  function addtocart(Request $req)
  {
    if($req->session()->has('user')){
        $cart=new cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');

    } 
    else 
    {
         return redirect('/login');

    } 


  }
  static function cartitem(){
    $userId=Session::get('users')['id'] ; 
   
      return cart::where('id',$userId)->count();
  }
}
