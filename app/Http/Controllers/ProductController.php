<?php

namespace App\Http\Controllers;

use App\Models\CreateCart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    function index(){
        $data=product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function AddToCart(Request $req)
    {
        if($req->session()->has('user')){
           $cart=new CreateCart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('product');
        }
        else
        {
            return redirect('login');
        }
    }
   static function CartItem()
    {
      $userId=Session::get('user')['id'];
      return CreateCart::where('user_id',$userId)->count();

    }
    function CartList(){
       $userId=Session::get('user')['id'];
       $products=DB::table('create_carts')
       ->join('products','create_carts.Product_id','=','product_id')
       ->where('create_carts.user_id',$userId)
       ->select('products.*','create_carts.id as cart_id')
       ->get();

       return view('cartList',['products'=>$products]);
    }
    function removeCart($id){
        CreateCart::destroy($id);
        return redirect('CartList');
    }
    function orderNow(){
        $userId=Session::get('user')['id'];
       $total= $products=DB::table('create_carts')
        ->join('products','create_carts.Product_id','=','product_id')
        ->where('create_carts.user_id',$userId)

        ->sum('products.price');

        return view('orderNow',['total'=>$total]);
    }
 function orderPlace(Request $req){
        $userId=Session::get('user')['id'];
      $allCart=CreateCart::where('user_id',$userId)->get();
  foreach($allCart as $cart)
  {
 $order=new Order;
 $order->product_id=$cart['product_id'];
 $order->user_id=$cart['user_id'];
 $order->status="pending";
 $order->payment_method=$req->payment;
 $order->payment_status="pending";
 $order->address=$req->address;
 $order->save();
 CreateCart::where('user_id',$userId)->delete();
  }
$req->input();
return redirect('product');
    }
}
func
